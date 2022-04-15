var stripe = Stripe('pk_test_51JSlDsAAmbbMhysqcpoOvmSfMIDX7bQp3VZ14NERnzBq9aUX9gT2eKhJRR2odXn1Rzf1zT8HZQulok8xFa8PdKuc00A8a9AegV');
var elements = stripe.elements();

var style = {
  base: {
    iconColor: '#666EE8',
    color: '#31325F',
    lineHeight: '15px',
    fontWeight: 300,
    
    fontSize: '0.9rem',
    
    '::placeholder': {
      color: '#7f8992',
    },
  },
};

var cardNumberElement = elements.create('cardNumber', {
  style: style,
  placeholder: '1111 2222 3333',
});
cardNumberElement.mount('#card-number-element');

var cardExpiryElement = elements.create('cardExpiry', {
  style: style,
  placeholder: 'MM/YY',
});
cardExpiryElement.mount('#card-expiry-element');

var cardCvcElement = elements.create('cardCvc', {
  style: style,
  placeholder: '123',
});
cardCvcElement.mount('#card-cvc-element');
 

function setOutcome(result) {
  var successElement = document.querySelector('.success');
  var errorElement = document.querySelector('.error');
  successElement.classList.remove('visible');
  errorElement.classList.remove('visible');

  if (result.token) {
    // In this example, we're simply displaying the token
    successElement.querySelector('.token').textContent = result.token.id;
    successElement.classList.add('visible');

    // In a real integration, you'd submit the form with the token to your backend server
    var form = document.querySelector('form');
    form.querySelector('input[name="token"]').setAttribute('value', result.token.id);
    form.submit();
  } else if (result.error) {
    errorElement.textContent = result.error.message;
    errorElement.classList.add('visible');
  }
}

cardNumberElement.on('change', function(event) {
  setOutcome(event);
});

document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();
  
  stripe.createToken(cardNumberElement).then(setOutcome);
});
