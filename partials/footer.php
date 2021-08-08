 <!--Footer-->
 <footer id="footer" class="footer relative pt-1 border-b-2 border-blue-700 bg-indigo-500">
    <div class="container mx-auto px-6">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row sm:space-x-28 sm:space-y-0 space-y-3">
                <div class="flex flex-col">
                    <span class="font-semibold text-gray-50 text-xl mb-2">Company Information</span>
                    <span class="my-2"><p  class="text-gray-50  text-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                      Cras ac rhoncus turpis.<br>
                      Cras quis justo quis elit bibendum<br>
                      sodales vitae mattis lacus.<br>
                      Vivamus arcu lectus,<br>
                      dapibus vel ipsum quis<br>
                </div>
                  <div class="flex flex-col ">
                    <span class="font-semibold text-gray-50 text-xl mb-2">Policies</span>
                    <span class="my-1"><a href="../policies/terms-of-use.php" class="text-gray-50 text-md hover:text-gray-200">Terms of Use</a></span>
                    <span class="my-1"><a href="../policies/privacy-policy.php" class="text-gray-50 text-md hover:text-gray-200">Privacy Policy</a></span>
                    <span class="my-1"><a href="../policies/disclaimer.php" class="text-gray-50 text-md hover:text-gray-200">Disclaimer</a></span>
                  </div>
                  <div class="flex flex-col ">
                      <span class="font-semibold text-gray-50 text-xl mb-2">Contact Us</span>
                      <span class="my-1"><p class="text-gray-50 text-md">Phone Number :</p></span>
                      <span class="my-1"><p class="text-gray-50 text-md ">Email :</p></span>
                  </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-md text-gray-50 font-semibold mb-2">
                  Rxreachout © 2021. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript">

    const scriptURL = 'https://script.google.com/macros/s/AKfycbyAglxfzPK0t3fZKW5ozbSQ3HbzGhnMJVCstM9wQ24n71PiMHWtlJAhQxdacjbCUDoWKA/exec'
    const form = document.forms['submit-to-google-sheet']
    
    form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => console.log('Success!', response))
    .catch(error => console.error('Error!', error.message))
    })
    
    
    function toggleModal(modalID){
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
    
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    
    $(document).ready(function() {
        $('.iti__flag-container').click(function() { 
        var countryCode = $('.iti__selected-flag').attr('title');
        var countryCode = countryCode.replace(/[^0-9]/g,'')
        $('#phone').val("");
        $('#phone').val("+"+countryCode+" "+ $('#phone').val());
    });
    });
  
</script>
<script type="text/javascript" src="../js/form.js"></script>
</body>
</html>