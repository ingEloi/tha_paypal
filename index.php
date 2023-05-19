<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simulate Shopping Cart | PayPal Take Home Assignment</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/accordion.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?components=buttons&client-id=AeFROPZdjilAheoBaNTfvd06pBw_tEAZjfrfsmO_naxgLFOdd5l93nn67ypERKNZ3Gdt7gj_CkJB2gXI"></script>

    <title>Take Home Assignment</title>
  </head>
  <body>
    <div class="container">
      <div id="accordion" class="py-5">

    <div class="col-lg-8 col-sm-3">
      <div class="product text-center">
        <div class="mb-3 position-relative">
          <a class="d-block"><img class="img-fluid w-100" src="img/product-2.jpg" alt="..."></a>
        </div>
        <h6><a class="reset-anchor">Air Jordan 12 gym red</a></h6>
        <p class="small text-muted">$300</p>
      </div>
    </div>
    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      <div class="card-header p-0 border-0" id="heading-240">
        <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-240" aria-expanded="false" aria-controls="#collapse-240"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Datos de Cliente</button>
      </div>
      <div id="collapse-240" class="collapse " aria-labelledby="heading-240" data-parent="#accordion">
        <div class="card-body accordion-body">
          <section class="py-5 accordion-item">
            <!-- BILLING ADDRESS-->

            <h2 class="h5 text-uppercase mb-4 accordion-header" id="headingOne">Billing details</h2>
            <div class="row">
              <div class="col-lg-8">
                <form action="#" id="billing">
                  <div class="row gy-3">
                    <div class="col-lg-6">
                      <label class="form-label text-sm text-uppercase" for="firstName">First name </label>
                      <input class="form-control form-control-lg" type="text" id="firstName" placeholder="Enter your first name" value="Eloí">
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label text-sm text-uppercase" for="lastName">Last name </label>
                      <input class="form-control form-control-lg" type="text" id="lastName" placeholder="Enter your last name" value="Jiménez">
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label text-sm text-uppercase" for="email">Email address </label>
                      <input class="form-control form-control-lg" type="email" id="email" placeholder="e.g. Jason@example.com" value="eloi@gmail.com">
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label text-sm text-uppercase" for="phone">Phone number </label>
                      <input class="form-control form-control-lg" type="tel" id="phone" placeholder="e.g. +02 245354745" value="12176702294">
                    </div>

                    <div class="col-lg-12">
                      <label class="form-label text-sm text-uppercase" for="address">Address line 1 </label>
                      <input class="form-control form-control-lg" type="text" id="address1" placeholder="House number and street name" value="EverGreen 1234">
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label text-sm text-uppercase" for="city">Town/City </label>
                      <input class="form-control form-control-lg" type="text" id="city" placeholder="Town / City" value=Springfield>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label text-sm text-uppercase" for="state">State </label>
                      <input class="form-control form-control-lg" type="text" id="state" placeholder="State" value="IL">
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label text-sm text-uppercase" for="zip">Zip Code </label>
                      <input class="form-control form-control-lg" type="text" id="zip" placeholder="Zip Code" value="62703">
                    </div>
                    <div class="col-lg-6 form-group">
                      <label class="form-label text-sm text-uppercase" for="country">Country</label>
                      <input class="form-control form-control-lg" type="text" id="country" placeholder="Country" value="US">
                    </div>

                  </div>
                </form>
              </div>


              <!-- ORDER SUMMARY-->
              <div class="col-lg-4">
                <div class="card border-0 rounded-0 p-lg-4 bg-light">
                  <div class="card-body">
                    <h5 class="text-uppercase mb-4">Your order</h5>
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Air Jordan 12 gym red</strong><span class="text-muted small">$300</span></li>
                      <li class="border-bottom my-2"></li>
                      <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span>$300</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 form-group">
                <button class="btn btn-dark" type="submit">Place order</button>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      <div class="card-header p-0 border-0" id="heading-241">
        <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-241" aria-expanded="false" aria-controls="#collapse-241"><i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Método de Pago </button>
      </div>
      <div id="collapse-241" class="collapse " aria-labelledby="heading-241" data-parent="#accordion">
        <div class="card-body accordion-body">
          <div id="paypal-button-container" class="paypal-button-container">
          <script src="scripts/scripts.js"></script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
