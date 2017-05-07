<?php

session_start();
generateToken();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_POST['token']) || !isset($_POST['g-recaptcha-response'])){
        echo json_encode(array('status' => False, 'message' => 'Verification Error'));
    }

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $secret = '6Le8jx4UAAAAAHi5D1WswDJ4dhES6JHwURLzY8h_';

    if(verifyToken($_POST['token']) && verifyRecaptcha($url, $secret, $_POST['g-recaptcha-response'])){

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
            $recieverEmail = 'helpdesk@jffc.asia';
            $subject = 'JFFC Inquiry from ' . filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $senderEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

            if(!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
                echo json_encode(array('status' => False, 'message' => 'Invalid Email'));
                return;
            }

            mail($recieverEmail, $subject, $_POST['message'], 'From:'.$senderEmail);
            
            echo json_encode(array('status' => True, 'message' => 'Thank you!'));
        }
        else{
            echo json_encode(array('status' => False, 'message' => 'Please provide all necessary details'));
        }
    }
    else{
        echo json_encode(array('status' => False, 'message' => 'Verification Error'));
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
    $query = http_build_query($data);
    $options = array(
        'http' => array(
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                        "Content-Length: ".strlen($query)."\r\n",     
            'method' => 'POST',
            'content' => $query
        )
    );
    $context = stream_context_create($options);
    $result = json_decode(file_get_contents($url, false, $context));

    return $result->success;
}

?>
