<?php 
  $donation = 'current-menu-item';
  $home = '';
  $about = '';
  $recipients = '';
  $portfolio = '';
  $takepart = '';
  $contact = '';

?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php'; ?>
  <body class="single-page about-page">
    <header class="site-header">
      <div class="top-header-bar">
        <div class="container">
          <?php include 'header-bar.php'; ?>
        </div>
      </div>
      <div class="nav-bar">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
              <div class="site-branding d-flex align-items-center">
                <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
              </div>
              <nav class="site-navigation d-flex justify-content-end align-items-center">
                <?php include 'menus.php'; ?>
              </nav>
              <div class="hamburger-menu d-lg-none">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <style type="text/css">
      .alert-primary-outline{
        background-color: transparent !important;
        transition: all 0.3s;
      }
      .dnt{
        min-height: 53px;
        border-color: #c3e6cb;
        transition: all 0.3s;
      }
      .alert-primary-outline:hover, .dnt:hover{
        background-color: #c3e6cb !important;
        box-shadow: 0 0 4px 2px #c3e6cb;
        transform: translateX(10px);
        cursor: pointer;
      }
      .dnt:focus{
        box-shadow: none;
        border-color: #c3e6cb;
        transform: translateX(10px);
      }
      .alert-primary-outline-active{
        background-color: #c3e6cb !important;
        box-shadow: 0 0 4px 2px #c3e6cb;
        transform: translateX(10px);
      }
      
    </style>
    <div class="donation page-header" style="background: url(images/donation.jpg) no-repeat center !important;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Donation</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="welcome-wrap pt-1" id="about">
      <div class="container">
        <div class="row">
          <div class="col-12 ">
            <div class="welcome-content pt-0">
              <div class="entry-content pt-0">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#dmi">Donate Material Items</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#mg">Monetary Gift</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content" style="display: block !important;">
                  <div id="dmi" class="container tab-pane active">
                    <div class="row mt-3">
                      <div class="col-xs-12 col-lg-8 mt-4">
                        <h6><b>
                          You can further aid Community WardrobeNG by contributing your unused or gently worn clothing, footwear, and accessories.
                        </b></h6>

                        <p>
                          To facilitate our processing, kindly ensure all items are laundered, tag-free, and removed from hangers before packing them in either cardboard boxes or plastic bags. Adhering to these instructions greatly assists our dedicated team of volunteers in efficiently handling the donations we receive.
                        </p>

                        <h2 class="entry-title about-title mt-4">Items We Accept:</h2>
                        <div class="popular-posts mt-0">
                            <ul class="mt-0">
                              <li><i class="fa fa-heart-o"></i> New or gently used clothing, outerwear, shoes, pajamas and undergarments in all sizes.</li>
                              <li><i class="fa fa-heart-o"></i> Accessories like purses, belts, jewelry and hats.</li>
                              <li><i class="fa fa-heart-o"></i> New or gently used books.</li>
                            </ul>
                        </div>

                        <h2 class="entry-title about-title mt-4">Items We Do Not Accept:</h2>
                        <div class="popular-posts mt-0">
                            <ul class="mt-0">
                              <li><i class="fa fa-heart-o"></i> Furniture.</li>
                              <li><i class="fa fa-heart-o"></i> Electronics/appliances.</li>
                              <li><i class="fa fa-heart-o"></i> Open cosmetics.</li>
                            </ul>
                        </div>

                        <div class="donate-btn mt-5 mb-5">
                          <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                        </div>
                      </div>
                      <div class="col-xs-12 col-lg-4">
                        <img src="images/dnm.jpg" alt="donate material item">
                      </div>
                    </div>                    
                  </div>

                  <div id="mg" class="container tab-pane fade">
                    <div class="row mt-3">
                      <div class="col-xs-12 col-lg-8 ">
                      <h3>Support Us Financially</h3>
                      <p>
                        At Community WardrobeNG, every donation, no matter the size, helps us make a significant impact. Your monetary contribution allows us to cover essential operational costs, expand our outreach, and provide even more assistance to those in need. With your support, we can continue to offer quality clothing options and promote dignity and confidence within our community.
                      </p>
                      <div class="card mt-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                              <h5>Your details</h5>
                            </div>
                            <div class="col-12 mb-2">
                              <input type="text" name="name" id="donate_name" class="form-control shadow-none dnt" placeholder="enter fullname">
                            </div>
                            <div class="col-12 mb-2">
                              <input type="text" name="email" id="donate_email" class="form-control shadow-none dnt" placeholder="enter email address">
                            </div>

                            <div class="col-12 mt-3">
                              <hr>
                              <h5>Now choose how much.</h5>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <div class="alert alert-success alert-primary-outline" id="1" onclick="amount_select('1', 10000)">
                                <strong>NGN 10,000</strong>
                              </div>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <div class="alert alert-success alert-primary-outline" id="2" onclick="amount_select('2', 20000)">
                                <strong>NGN 20,000</strong>
                              </div>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <div class="alert alert-success alert-primary-outline" id="3" onclick="amount_select('3', 50000)">
                                <strong>NGN 50,000</strong>
                              </div>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <div class="alert alert-success alert-primary-outline" id="4" onclick="amount_select('4', 100000)">
                                <strong>NGN 100,000</strong>
                              </div>
                            </div>
                            <div class="col-xs-12 col-lg-4 mb-2">
                              <input type="text" name="amount" id="other_amount" class="form-control shadow-none dnt alert-primary-outline" placeholder="or enter amount" onkeyup="assign_other_amount()" onclick="amount_select('other_amount', 0)">
                            </div>
                            <div class="col-xs-12 col-lg-4">
                              <form id="paymentForm" method="post">
                                <input type="hidden" name="donation_amount" id="donation_amount">
                                <button type="submit" onclick="payWithPaystack()" class="btn gradient-bg mr-2">Donate Now</button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-lg-3">
                      <img src="images/donor_img.jpg" alt="donate material item">
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <?php include 'footer.php'; ?>

    <script type="text/javascript">
      const amount_select = (id, amount)=>{
        var id = document.getElementById(id);
        var elements = document.querySelectorAll(".alert-primary-outline");

        elements.forEach(function(element) {
          element.classList.remove("alert-primary-outline-active");
        });

        id.classList.add('alert-primary-outline-active');
        document.getElementById('donation_amount').value = amount;
      }

      const assign_other_amount = ()=>{
        get_amount = document.getElementById('other_amount').value;

        document.getElementById('donation_amount').value = get_amount;
      }


      const paymentForm = document.getElementById('paymentForm');
      paymentForm.addEventListener("submit", payWithPaystack, false);

      function payWithPaystack(e) {
        e.preventDefault();

        dname = document.getElementById('donate_name');
        demail = document.getElementById("donate_email");
        damount = document.getElementById("donation_amount");

        if (dname.value == '' ) {
          alert('No name found, Try Again!');
          return
        }

        if (demail.value == '' ) {
          alert('No email address found, Try Again!');
          return
        }

        if (damount.value == '' ) {
          alert('Invalid amount, Try Again!');
          return
        }

        let handler = PaystackPop.setup({
          key: 'pk_test_fbb3d171ba3203821fb54d6d0d836b21929b06cf', // Replace with your public key
          email: demail.value,
          amount: damount.value * 100,
          // ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
          // label: "Optional string that replaces customer email"
          onClose: function(){
            alert('Window closed.');
          },
          callback: function(response){
            let message = 'Payment complete! Reference: ' + response.reference;

            date = getCurrentDateTime();

            // $.ajax({
            //   method: 'post',
            //   url: 'assets/php/donation.php',
            //   data: {
            //     username: dname.value,
            //     email: demail.value,
            //     amount: damount.value,
            //     ref: response.reference,
            //     date:date,
            //     donation: true
            //   },

            //   beforeSend:function(){
            //     console.log('sending....');
            //   },

            //   success: function(data){
            //     console.log(data);
            //   },

            //   error:function(e){
            //     console.log(e)
            //   }
            // });
            
            // alert(message);
          }
        });

        handler.openIframe();
      }

      function getCurrentDateTime() {
        var now = new Date();
        var year = now.getFullYear();
        var month = String(now.getMonth() + 1).padStart(2, '0'); // Add 1 because months are zero-indexed
        var day = String(now.getDate()).padStart(2, '0');
        var hours = String(now.getHours()).padStart(2, '0');
        var minutes = String(now.getMinutes()).padStart(2, '0');
        var seconds = String(now.getSeconds()).padStart(2, '0');
        
        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
      }
    </script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
  </body>
</html>