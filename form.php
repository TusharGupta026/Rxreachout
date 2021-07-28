<?php 

  $captchaSiteKey = '6Le2g8IbAAAAAK16ntsr3zaHNePJ5kHQw31esX7u';
  $secret_key = '6Le2g8IbAAAAAGJq9-YvEKcbZOCQVtF3kV2fIYfq';
   
function curlRequest($url)
{
    $ch = curl_init();
    $getUrl = $url;
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $getUrl);
    curl_setopt($ch, CURLOPT_TIMEOUT, 80);
    
    $response = curl_exec($ch);
    return $response;
    
    curl_close($ch);
    
}
 
    if(isset($_POST['submit'],$_POST['g-recaptcha-response']))
  {
        $createGoogleUrl = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response'];
    $verifyRecaptcha = curlRequest($createGoogleUrl);
    $decodeGoogleResponse = json_decode($verifyRecaptcha,true);
 
        if($decodeGoogleResponse['success'] == 1)
    {
            $fullname   = htmlentities(trim($_POST['fullname'])) ;
            $email  = htmlentities(trim($_POST['email']));
            $phonenumber = htmlentities(trim($_POST['phonenumber(optional)']))
        }
        else
        {
            $error_msg = 'Invalid Captcha';
        }
    }
?>    