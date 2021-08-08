var errorLabel = document.getElementById('captchaError');
var submitBtn = document.getElementById('submit');


 function resetForm() {
    window.parent.location = window.parent.location.href;
  }
  $(document).ready(function(){
      $(".reset-btn").click(function(){
          $("#myForm").trigger("reset");
          grecaptcha.reset();
          errorLabel.innerHTML = "";
          submitBtn.classList.add('not-allowed');
          submitBtn.classList.remove('allowed-pointer');
          errorLabel.classList.add('redCaptcha');
          errorLabel.classList.remove('greenCaptcha');
          $("#submit").attr('disabled','');
          $("#submit").attr('aria-disabled','true');
          submitBtn.removeAttribute('title');
          submitBtn.setAttribute('title','Please Verify Captcha');
          
      });
  });

function captchaVerified() {
    var submitBtn = document.getElementById('submit');
    var errorLabel = document.getElementById('captchaError');
    var myForm=document.getElementById('myForm');
    var captchResponse=document.getElementById('recaptcha');

    if(captchResponse.length == 0){
      errorLabel.innerHTML = "Verify Captcha!";
    }else{
      myForm.setAttribute('onsubmit','toggleModal("modal-id")');
      submitBtn.removeAttribute('disabled');
      submitBtn.removeAttribute('aria-disabled');
      submitBtn.removeAttribute('title');
      submitBtn.setAttribute('title','Captcha Verified successfully');
      submitBtn.classList.remove('not-allowed');
      submitBtn.classList.add('allowed-pointer');
      errorLabel.innerHTML = "Captcha Verified";
      errorLabel.classList.remove('redCaptcha');
      errorLabel.classList.add('greenCaptcha');
    }

    
  }
  // Expiration callback function
  function captchaExpired() {
    grecaptcha.reset();
  }