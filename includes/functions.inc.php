<?php



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
    mysqli_close($conn);
    header("location: ../erp1.php?error=none");
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


