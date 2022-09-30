<template>
  <div class="container-chechkout mt-5">
    <h1>Checkout</h1>
    <!-- <div class="content">
      <form method="post" id="payment-form">

        <section>
          <label for="amount">
            <span class="input-label">Amount</span>
            <div class="input-wrapper amount-wrapper">
              <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="10">
            </div>
          </label>

          <div class="bt-drop-in-wrapper">
            <div id="bt-dropin"></div>
          </div>
        </section>

        <input id="nonce" name="payment_method_nonce" type="hidden" />
        <button class="button" type="submit"><span>Test Transaction</span></button>
      </form>
    </div> -->
    <!-- <div id="dropin-wrapper">
            <div id="checkout-message"></div>
            <div id="dropin-container"></div>
            <button id="submit-button">Submit payment</button>
        </div> -->
  </div>
</template>

<script>


export default {


}
</script>


 <!-- <script>
var form = document.querySelector('#payment-form');
var client_token = "{{ $token }}";

braintree.dropin.create({
  authorization: client_token,
  selector: '#bt-dropin',
  paypal: {
    flow: 'vault'
  }
}, function (createErr, instance) {
  if (createErr) {
    console.log('Create Error', createErr);
    return;
  }
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    instance.requestPaymentMethod(function (err, payload) {
      if (err) {
        console.log('Request Payment Method Error', err);
        return;
      }

      // Add the nonce to the form and submit
      document.querySelector('#nonce').value = payload.nonce;
      form.submit();
    });
  });
});
</script> -->
<!-- <script src="https://js.braintreegateway.com/web/3.38.1/js/client.min.js"></script> -->
<!-- <script src="https://js.braintreegateway.com/web/3.38.1/js/hosted-fields.min.js"></script> -->
<!-- <script>
  var button = document.querySelector('#submit-button');

  braintree.dropin.create({
    // Insert your tokenization key here
    authorization: '<sandbox_s93g6b2q_tbkvpxtz3gvbwpwz>',
    container: '#dropin-container'
  }, function (createErr, instance) {
    button.addEventListener('click', function () {
      instance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
        // When the user clicks on the 'Submit payment' button this code will send the
        // encrypted payment information in a variable called a payment method nonce
        $.ajax({
          type: 'POST',
          url: '/checkout',
          data: {'paymentMethodNonce': payload.nonce}
        }).done(function(result) {
          // Tear down the Drop-in UI
          instance.teardown(function (teardownErr) {
            if (teardownErr) {
              console.error('Could not tear down Drop-in UI!');
            } else {
              console.info('Drop-in UI has been torn down!');
              // Remove the 'Submit payment' button
              $('#submit-button').remove();
            }
          });

          if (result.success) {
            $('#checkout-message').html('<h1>Success</h1><p>Your Drop-in UI is working! Check your <a href="https://sandbox.braintreegateway.com/login">sandbox Control Panel</a> for your test transactions.</p><p>Refresh to try another transaction.</p>');
          } else {
            console.log(result);
            $('#checkout-message').html('<h1>Error</h1><p>Check your console.</p>');
          }
        });
      });
    });
  });
</script> -->
<!-- <script>

// export default {
    name: "Checkout",
    data() {

    },
    methods:{
       
    }
};
braintree.dropin.create({
    container: document.getElementById('dropin-container'),
    // ...plus remaining configuration
}, (error, dropinInstance) => {
    // Use `dropinInstance` here
    // Methods documented at https://braintree.github.io/braintree-web-drop-in/docs/current/Dropin.html
});
</script> -->

<style lang="scss">

</style>
