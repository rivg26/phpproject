<?php


// echo "Hi";


// header("location: ../useraccount.php?id=" . $id);
require_once 'dbh.inc.php';
require_once 'functions.inc.php';
$conn = OpenCon();

    if(isset($_POST['update'])){
        $id = $_POST['yepid'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirmpassword'];
        $usertype = $_POST['usertype'];
        $userstatus = $_POST['userstatus'];

        if($password !== $confirm){
            echo "<script>alert('Password is not the same!')</script>";
            echo "<script>window.location.href='http://localhost/xampp/Design/useraccount.php?id=".$id."'"."</script>";
        }
        else{
            updateAccList($conn,$id,$username,$password,$password,$usertype,$userstatus);
        }
    }

    if(isset($_POST['delete'])){
        deleteUserAccount($conn,$_POST['yepid']);
    }
    if(isset($_POST['cancel'])){
        header("location: ../useraccountlist.php");
    }
?>