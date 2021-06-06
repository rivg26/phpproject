<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';
$conn = OpenCon();
if(isset($_POST['login'])){
    $user = null;
    $ok = true;
    $messages = [];

    if(empty($_POST['username']) || empty($_POST['password'])){
        $ok = false;
        $messages [] = "Please fill all the fields!";
    }
    elseif(!checkingUsername($conn,trim($_POST['username']))){
        $ok = false;
        $messages [] = "User doesn't exist!";
    }
    else{
        $data = checkingUsername($conn,trim($_POST['username']));
        $hashPassword = $data['Upassword'];
        $checkPassword = password_verify($_POST['password'],$hashPassword);

        if($checkPassword === false){
            $ok = false;
            $messages [] = "Wrong Password!";
        }
        else{
            session_start();
            $_SESSION['username'] = $data['username'];
            $_SESSION['id'] = $data['user_id'];
            
            if($data['user_type'] === "administrator"){
                $ok = true;
                $messages = [];
                $user = "administrator";
            }
            elseif($data['user_type'] === "cashier one"){
                $ok = true;
                $messages = [];
                $user = "cashier one";
            }
            elseif($data['user_type'] === "cashier two"){
                $ok = true;
                $messages = [];
                $user = "cashier two";
            }
            else{
                $ok = true;
                $messages = [];
                $user = "accounting";
            }

        }
        
    }
}





echo json_encode(array(
    'ok' => $ok,
    'messages' => $messages,
    'user' => $user,

));









?>