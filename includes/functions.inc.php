<?php

function savePayrollList($conn,$empID){
    $sql = "INSERT INTO payroll (`employee_no`) VALUES (?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../erp1.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$empID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
function saveUserAccount($conn,$empID){
    $sql = "INSERT INTO user_account (employee_id) VALUES (?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../erp1.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$empID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function saveBtn($conn, $empNumber, $firstName, $middleName, $lastName, $suffix, $dob, $gender, $nationality, $civilstatus, $department, $designation, $deptStatus, $empStatus, $paydate, $contactNumber, $email, $socialMedia, $socialMediaID, $address1, $address2, $city, $state, $country, $zipCode, $picPath)
{
    $sql = "INSERT INTO employee (emp_number, fname, mname, lname, suffix, birthday, gender, nationality, civil_status, department, designation, dept_status, emp_status, paydate, contact_number, email, social_media, social_media_id, address1, address2, city, states, country, zip, picpath) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../erp1.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssis", $empNumber, $firstName, $middleName, $lastName, $suffix, $dob, $gender, $nationality, $civilstatus, $department, $designation, $deptStatus, $empStatus, $paydate, $contactNumber, $email, $socialMedia, $socialMediaID, $address1, $address2, $city, $state, $country, $zipCode, $picPath);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script>alert('Data Successfully Saved!')</script>";
    echo "<script>window.location.href='http://localhost/xampp/Design/employeelist.php'</script>";
    exit();
}

function getResult($conn,$id){
    $sql = "SELECT * FROM employee where emp_id = '$id';";
	$resultData = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($resultData)){
		$data = $row;
	}

	return $data;
}

function updateBtn($conn, $firstName, $middleName, $lastName, $suffix, $dob, $gender, $nationality, $civilstatus, $department, $designation, $deptStatus, $empStatus, $paydate, $contactNumber, $email, $socialMedia, $socialMediaID, $address1, $address2, $city, $state, $country, $zipCode, $picPath,$empNew){
    $sql = "UPDATE employee SET fname = ?, mname = ?, lname = ?,suffix = ?, birthday = ?, gender = ?, nationality = ?, civil_status = ?, department = ?, designation = ?, dept_status = ?, emp_status = ?, paydate = ?, contact_number = ?, email = ?, social_media = ?, social_media_id = ?, address1 = ?, address2 = ?, city = ?, states = ?, country = ?, zip = ?, picpath = ? WHERE emp_number = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../erp2.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssiss", $firstName, $middleName, $lastName, $suffix, $dob, $gender, $nationality, $civilstatus, $department, $designation, $deptStatus, $empStatus, $paydate, $contactNumber, $email, $socialMedia, $socialMediaID, $address1, $address2, $city, $state, $country, $zipCode, $picPath,$empNew);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    echo "<script>alert('Updated Success')</script>";
    echo "<script>window.location.href='http://localhost/xampp/Design/employeelist.php'</script>";
    exit();
}

function deleteBtn($conn,$id){
    $sql = "DELETE FROM employee WHERE emp_number = '$id'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert('Deleted Success')</script>";
        echo "<script>window.location.href='http://localhost/xampp/Design/employeelist.php'</script>";
    }
    else{
        echo "Error" . $sql. "<br>". $conn->error;
    }
}


function employeeQuery($conn){
    $sql = "SELECT user_id,employee.emp_number,employee.fname, employee.mname, employee.lname, username,user_type, user_status, employee.department,employee.designation FROM `user_account` FULL JOIN employee ON employee.emp_number = employee_id";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
           echo '<tr class = "userAccClick" row.id = '.$row['user_id'].'><td>'.$row['emp_number'].'</td><td>'.$row['fname'].'&nbsp;'.$row['mname'].'&nbsp;'.$row['lname'].'&nbsp;'.'</td><td>'.$row['username'].'</td><td>'.$row['user_type'].'</td><td>'.$row['user_status'].'</td><td>'.$row['department'].'</td><td>'.$row['designation'].'</td></tr>';
        }
    }
    $conn->close();
}
function payrollQuery($conn){
    $sql = "SELECT `employee_no`,`payroll_id`, employee.fname,employee.mname, employee.lname, employee.suffix, employee.civil_status,employee.department,employee.designation,employee.emp_status,employee.dept_status FROM `payroll` FULL JOIN employee ON employee.emp_number = `employee_no`";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
           echo '<tr class = "payrollAccClick" row.id = '.$row['payroll_id'].'><td>'.$row['employee_no'].'</td><td>'.$row['fname'].'&nbsp;'.$row['mname'].'&nbsp;'.$row['lname'].'&nbsp;'.'</td><td>'.$row['civil_status'].'</td><td>'.$row['department'].'</td><td>'.$row['designation'].'</td><td>'.$row['emp_status'].'</td><td>'.$row['dept_status'].'</td></tr>';
        }
    }
    $conn->close();
}


function getUserAccount($conn,$empNumber){
    $sql = "SELECT user_id,employee.emp_number,employee.fname, employee.mname, employee.lname,employee.suffix, username,user_type, user_status, employee.department,employee.designation,employee.picpath, Upassword,confirm_password FROM `user_account` FULL JOIN employee ON employee.emp_number = employee_id WHERE user_id = '$empNumber'";
    $resultData = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($resultData)){
		$data = $row;
	}

	return $data;

}

function getPayrollAccount($conn,$empNumber){
    $sql = "SELECT * FROM `payroll` FULL JOIN employee ON employee.emp_number = `employee_no` WHERE payroll_id = '$empNumber'";
    $resultData = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($resultData)){
		$data = $row;
	}

	return $data;

}

function updateAccList($conn,$ID,$username,$password,$confirmPassword,$userType,$userStatus){
    $sql = "UPDATE user_account set username = ?, Upassword = ?, confirm_password = ?, user_type = ?, user_status = ? WHERE user_id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../useraccount.php?error=stmtfailed");
        exit();
    }
    $hashPwd = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssssss",$username,$hashPwd ,$hashPwd,$userType,$userStatus,$ID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script>alert('Updated Success')</script>";
    echo "<script>window.location.href='http://localhost/xampp/Design/useraccountlist.php'</script>";
    exit();
}
function deleteUserAccount($conn,$id){
    $sql = "DELETE FROM user_account WHERE user_id = '$id'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert('Deleted Success')</script>";
        echo "<script>window.location.href='http://localhost/xampp/Design/useraccountlist.php'</script>";
    }
    else{
        echo "Error" . $sql. "<br>". $conn->error;
    }
}

function checkingUsername($conn,$username){
    $sql = "SELECT * FROM user_account where username = '$username';";
	$resultData = mysqli_query($conn,$sql);

	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}else{
        $result = false;
        return $result;
    }

}








// AnswerForm Functions
    
function computation($x,$y){
    return (float)$x * (float)$y;
}

function grossIncome($x,$y,$z){
    return (float)$x + (float)$y + (float)$z;
}

function sssTable($num){
    $compare1 = [1000,3250,3750,4250,4750,5250,5750,6250,6750,7250,7750,8250,8750,9250,9750,10250,10750,11250,11750,12250,12750,13250,13750,14250,14750,15250,15750,16250,16750,17250,17750,18250,18750,19250,19750,20250,20750,21250,21750,22250,22750,23250,23750,24250];

    $compare2 = [3249.99,3749.99,4249.99,4749.99,5249.99,5749.99,6249.99,6749.99,7249.99,7749.99,8249.99,8749.99,9249.99,9749.99,10249.99,10749.99,11249.99,11749.99,12249.99,12749.99,13249.99,13749.99,14249.99,14749.99,15249.99,15749.99,16249.99,16749.99,17249.99,17749.99,18249.99,18749.99,19249.99,19749.99,20249.99,20749.99,21249.99,21749.99,22249.99,22749.99,23249.99,23749.99,24249.99,24749.99];

    $EE = [135,157.50,180,202.50,225,247.50,270,292.50,315,337.50,360,382.50,405,427.50,450,472.50,495,517.50,540,562.50,585,607.50,630,652.50,675,697.50,720,742.50,765,787.50,810,832.50,855,877.50,900,900,900,900,900,900,900,900,900,900];
    
    $answer = 0;
    $param = true;
    $max = 24750;

    $x = 0;

    while($x < count($compare1)){

        if($compare1[$x] <= $num && $num <= $compare2[$x]){
            $answer = $EE[$x];
            break;
        }
        if($max < $num){
            $answer = 900;
            break;
        }

        $x++;

    }
    
    return $answer;
    
}

function phhealthTable($num){
    $compare1 = [10000.1,11000.1,12000.1,13000.1,14000.1,15000.1,16000.1,17000.1,18000.1,19000.1,20000.1,21000.1,22000.1,23000.1,24000.1,25000.1,26000.1,27000.1,28000.1,29000.1,30000.1,31000.1,32000.1,33000.1,34000.1,35000.1,36000.1,37000.1,38000.1,39000.1];

    $compare2 = [11000,12000,13000,14000,15000,16000,17000,18000,19000,20000,21000,22000,23000,24000,25000,26000,27000,28000,29000,30000,31000,32000,33000,34000,35000,36000,37000,38000,39000,39999.99];

    $EE = [151.25,165,178.75,192.50,206.50,220,233.75,247.50,261.25,275,288.75,302.50,316.25,330,343.75,357.50,371.25,385,398.75,412.50,426.25,440,453.75,467.50,481.25,495,508.75,522.50,536.25,543.13];

    $answer = 0;
    $param = true;
    $min = 10000;
    $max = 40000;

    $x = 0;

    while($x < count($compare1)){
        if($num <= $min){
            $answer = 137;
            break;
        }

        if($compare1[$x] <= $num && $num <= $compare2[$x]){
            $answer = $EE[$x];
            break;
        }
        if($max < $num){
            $answer = 550;
            break;
        }

        $x++;

    }
    return $answer;
    
}

function itrTable($num){
    $compare1  = [250000,400000,800000,2000000];
    $compare2 = [400000,800000,2000000,8000000];
    $annual = $num * 12;
    $x = 0;
    $param = false;
    $final = 0;
    

    while($x < count($compare1)){
        if($annual <= 250000){
            $final = 0;
            break;
        }
        if(8000000 < $annual){
            $excess = $annual - $compare2[3];
            $result = ((35/100) * $excess) + (2202500);
            $monthly = $result/12;
            $final = $monthly;
            break;
        }
        if($compare1[$x] <= $annual && $annual <= $compare2[$x]){
            $param = true;
            while($param){
                if($x == 0){
                    $excess = $annual - $compare1[$x];
                    $result = (15/100) * $excess;
                    $monthly = $result/12;
                    $final = $monthly;
                    $param = false;
                    break;
                }
                elseif($x == 1){
                    $excess = $annual - $compare1[$x];
                    $result = ((20/100) * $excess) + (22500);
                    $monthly = $result/12;
                    $final = $monthly;
                    $param = false;
                    break;
                }
                elseif($x == 2){
                    $excess = $annual - $compare1[$x];
                    $result = ((25/100) * $excess) + (102500);
                    $monthly = $result/12;
                    $final = $monthly;
                    $param = false;
                    break;
                }
                else{
                    $excess = $annual - $compare1[$x];
                    $result = ((25/100) * $excess) + (402500);
                    $monthly = $result/12;
                    $final = $monthly;
                    $param = false;
                    break;
                }
            }
        }

        $x++;
    }
    return $final;

}

function totalDeduction($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
    return $a+$b+$c+$d+$e+$f+$g+$h+$i+$j;
}

function clearData(){
    $BpRateHour = null;
    $BpNohCutoff = null;
    $BpIpCutoff = null;
    $HRateHour = null;
    $HNohCutoff  = null;
    $HHPay = null;
    $OIRateHour = null;
    $OInohcutoff = null;
    $OITotalIncome = null;
    $GrossIncome = null;
    $NetIncome = null;
    $SSS = null;
    $Philhealth = null;
    $PagIbig = 100;
    $ITR = null;
    $OSSSLoan = null;
    $OPagIbigLoan = null;
    $OFSD = null;
    $OFSL = null;
    $OSL = null;
    $OO = null;
    $DSRH = null;
    $FEN = null;
    $FQDS = null;
    $FName = null;
    $FMName = null;
    $FSName = null;
    $FCivilStatus = null;
    $FDesign = null;
    $FPayDate = null;
    $FEmloyeeStatus = null;
    $FDepartment = null;
}