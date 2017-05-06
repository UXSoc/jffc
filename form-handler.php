<?php

session_start();
generateToken();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_POST['token']) || !isset($_POST['g-recaptcha-response'])){
        return [False, 'Verification Error'];
    }

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $secret = '6Le8jx4UAAAAAHi5D1WswDJ4dhES6JHwURLzY8h_';

    if(verifyToken($_POST['token']) && verifyRecaptcha($url, $secret, $_POST['g-recaptcha-response'])){

        if(isset($_POST['email']) && isset($_POST['message'])){
            $recieverEmail = 'anton.suba19.18@gmail.com';
            $subject = 'JFFC Inquiry';
            $senderEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            mail($recieverEmail, $subject, $_POST['message'], 'From:'.$senderEmail);

            return [True, 'Thank you!'];
        }
        else{
            return [False, 'Please provide all details required'];
        }
    }
    else{
        return [False, 'Verification Error'];
    }
}

function generateToken(){
    if(empty($_SESSION['token_key'])){
        $_SESSION['token_key'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['token_key'];
}

function verifyToken($token){
    $val = hash_hmac('sha256', '/form-handler.php', $_SESSION['token_key']);
    return hash_equals($val, $token);
}

function verifyRecaptcha($url, $secret, $response){
    $data = array(
        'secret' => $secret,
        'response' => $response
    );
    $options = array(
        'http' => array(
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $result = json_decode(file_get_contents($url, false, $context));

    return $result->success;
}

?>
