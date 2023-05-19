var email = document.getElementById("email").value;
var firstName = document.getElementById("firstName").value;
var lastName = document.getElementById("lastName").value;
var phone = document.getElementById("phone").value;
var address1 = document.getElementById("address1").value;
var city = document.getElementById("city").value;
var state = document.getElementById("state").value;
var zip = document.getElementById("zip").value;
var country = document.getElementById("country").value;
paypal.Buttons({
  createOrder: function(data, actions) {
    return actions.order.create({
      payer: {
        email_address: email,
        name: {
          given_name: firstName,
          surname: lastName
        },
        phone: {
          phone_type: "MOBILE",
          phone_number: {
            national_number: phone
          }
        },
        address: {
          address_line_1: address1,
          admin_area_2: city,
          admin_area_1: state,
          postal_code:zip,
          country_code: country
        }
      },

      purchase_units: [{
        amount: {
          value: 100
        },
        shipping:{
          name:{
            full_name: firstName+" "+lastName
          },
          address: {
            address_line_1: address1,
            admin_area_2: city,
            admin_area_1: state,
            postal_code:zip,
            country_code: country
          }
        }
      }]
    });
  },
  onApprove: function(data, actions) {
    return actions.order.capture().then(function(orderData) {
      // Successful capture! For dev/demo purposes:
      console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
      var transaction = orderData.purchase_units[0].payments.captures[0];
      //alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

      // Hace la redicrreción de la página.
      actions.redirect('http://localhost/PayPal_THA/thankyou.php?idTransaction='+transaction.id);
    });
  }
}).render('#paypal-button-container');
