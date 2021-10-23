<!DOCTYPE html>
<html>
   <head>
      <title>Commtech Soft | Payment Interface</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <style type="text/css">
         .container {
         margin-top: 40px;
         }
         .panel-heading {
         display: inline;
         font-weight: bold;
         }
         .flex-table {
         display: table;
         }
         .display-tr {
         display: table-row;
         }
         .display-td {
         display: table-cell;
         vertical-align: middle;
         width: 55%;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <div class="row text-center">
                        <h3 class="panel-heading">Payment Details</h3>
                     </div>
                  </div>
                  <div class="panel-body">
                     @if (Session::has('success'))
                     <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                     </div>
                     @endif
                     <form role="form" action="{{ route('checkout4.dealership') }}" method="post" class="validation"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                        id="payment-form">
                        @csrf
                        <!-- <div class='form-row row'>
                           <div class='col-xs-12 form-group required'>
                              <label class='control-label'>Name on Card</label> <input
                                 class='form-control' size='4' type='text'>
                           </div>
                        </div> -->
                        <div class='form-row row'>
                           <div class='col-xs-12 form-group card required'>
                              <label class='control-label'>Card Number</label> <input
                                 autocomplete='off' class='form-control card-num' size='20'
                                 type='text'>
                           </div>
                        </div>
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='control-label'>CVC</label> 
                              <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 415' size='4'
                                 type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Month</label> <input
                                 class='form-control card-expiry-month' placeholder='MM' size='2'
                                 type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Year</label> <input
                                 class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                 type='text'>
                           </div>
                        </div>
                        <div class='form-row row'>
                           <div class='col-md-12 hide error form-group'>
                              <div class='alert-danger alert'>Fix the errors before you begin.</div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-12">
                              <button class="btn btn-danger btn-lg btn-block" type="submit">Pay Now (£5)</button>
                           </div>
                        </div>
                     </form>
   <div class="row text-center">
        <h3 class="panel-heading">OR</h3>
     </div> 
    <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=AWch4_xy_Da2fBkZsA8JOKTeweDQQGI9NdihtxFn3VIWwXLR2h1oDU48mztWCuu8uXOd8aNd_4GGXDu2&disable-funding=credit,card&currency=GBP" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"GBP","value":5}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
   <script type="text/javascript">
      $(function() {
          var $form         = $(".validation");
        $('form.validation').bind('submit', function(e) {
          var $form         = $(".validation"),
              inputVal = ['input[type=email]', 'input[type=password]',
                               'input[type=text]', 'input[type=file]',
                               'textarea'].join(', '),
              $inputs       = $form.find('.required').find(inputVal),
              $errorStatus = $form.find('div.error'),
              valid         = true;
              $errorStatus.addClass('hide');
       
              $('.has-error').removeClass('has-error');
          $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
              $input.parent().addClass('has-error');
              $errorStatus.removeClass('hide');
              e.preventDefault();
            }
          });
        
          if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
              number: $('.card-num').val(),
              cvc: $('.card-cvc').val(),
              exp_month: $('.card-expiry-month').val(),
              exp_year: $('.card-expiry-year').val()
            }, stripeHandleResponse);
          }
        
        });
        
        function stripeHandleResponse(status, response) {
            console.log(response);
            
              if (response.error) {
                  $('.error')
                      .removeClass('hide')
                      .find('.alert')
                      .text(response.error.message);
              } else {
                  var token = response['id'];
                  $form.find('input[type=text]').empty();
                  $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                  $form.get(0).submit();
              }
          }
        
      });
   </script>
</html>