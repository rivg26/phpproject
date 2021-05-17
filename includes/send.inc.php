<?php
        require_once 'functions.inc.php';
        require_once 'dbh.inc.php';

        if(isset($_POST["save"])){
            $firstName = $_POST['firstname'];
            $middleName = $_POST['middlename'];
            $lastName = $_POST['lastname'];
            $suffix = $_POST['suffix'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $nationality = $_POST['nationality'];
            $civilstatus = $_POST['civilstatus'];
            $department = $_POST['department'];
            $designation = $_POST['designation'];
            $deptStatus = $_POST['deptstatus'];
            $empStatus = $_POST['empstatus'];
            $paydate = $_POST['paydate'];
            $empNumber = $_POST['empnumber'];
            $contactNumber = $_POST['contactnumber'];
            $email = $_POST['email'];
            $socialMedia = $_POST['socialmedia'];
            $socialMediaID = $_POST['socialmediaid'];
            $address1 = $_POST['address1'];
            $address2 = $_POST['address2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $zipCode = $_POST['zipcode'];
            $picPath = $_POST['picpath'];


            $picPath = "../" . $picPath;
    
            if(file_exists($picPath)){
                $pic_filename = explode('../temp/', $picPath)[1];
                rename($picPath, '../uploads/' . $pic_filename);
                $picPath = '../uploads/' . $pic_filename;
            }
            $conn = OpenCon();
            saveBtn($conn,$empNumber,$firstName,$middleName,$lastName,$suffix,$dob,$gender,$nationality,$civilstatus,$department,$designation,$deptStatus,$empStatus,$paydate,$contactNumber,$email,$socialMedia,$socialMediaID, $address1,$address2,$city,$state,$country,$zipCode,$picPath);
            $conn->close();
        }
        
        if(isset($_POST['cancelbtn'])){
            echo "<script>alert('You canceled')</script>";
            echo "<script>window.location.href='http://localhost/xampp/Design/employeelist.php'</script>";
        }
        if(isset($_POST['canceled'])){
            echo "<script>alert('You canceled')</script>";
            echo "<script>window.location.href='http://localhost/xampp/Design/employeelist.php'</script>";
        }
        
        if(isset($_POST['updatebtn'])){
            $firstName = $_POST['firstname'];
            $middleName = $_POST['middlename'];
            $lastName = $_POST['lastname'];
            $suffix = $_POST['suffix'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $nationality = $_POST['nationality'];
            $civilstatus = $_POST['civilstatus'];
            $department = $_POST['department'];
            $designation = $_POST['designation'];
            $deptStatus = $_POST['deptstatus'];
            $empStatus = $_POST['empstatus'];
            $paydate = $_POST['paydate'];
            $empNumber = $_POST['empnumber'];
            $contactNumber = $_POST['contactnumber'];
            $email = $_POST['email'];
            $socialMedia = $_POST['socialmedia'];
            $socialMediaID = $_POST['socialmediaid'];
            $address1 = $_POST['address1'];
            $address2 = $_POST['address2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $zipCode = $_POST['zipcode'];
            $picPath = $_POST['picpath'];
            $conn = OpenCon();
            updateBtn($conn,$firstName,$middleName,$lastName,$suffix,$dob,$gender,$nationality,$civilstatus,$department,$designation,$deptStatus,$empStatus,$paydate,$contactNumber,$email,$socialMedia,$socialMediaID, $address1,$address2,$city,$state,$country,$zipCode,$picPath,$empNumber);
            $conn->close();

        }
        
        if(isset($_POST['deletebtn'])){
            $empNumber = $_POST['empnumber'];
            $conn = OpenCon();
            deleteBtn($conn,$empNumber);
            $conn->close();
        }
























?>