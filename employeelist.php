<?php 
    require_once 'includes/functions.inc.php';
    require_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <style>

        thead th {
        line-height: 70px;
        height: 70px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <table class = "table table-light table-striped table-hover table-bordered" >
            <thead class ="table-primary align-middle"> 
                <tr>
                    <th>Employee Number</th>
                    <th>Employee Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Nationality</th>
                    <th>Civil Status</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Employee Status</th>
                </tr>
            </thead>
        
        <?php
            $conn = OpenCon();
            $sql = "SELECT * FROM employee;";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    echo '<tr row.id='. $row['emp_id']. '><td>'. $row['emp_number'].'</td><td>'.' '.$row['fname'].' '.$row['mname'].' '.$row['lname'].' '.$row['suffix'].'</td>'.'<td>'.$row['gender'].'</td><td>'. $row['birthday'].'</td><td>'.$row['nationality'].'</td><td>'.$row['civil_status'].'</td><td>'.$row['department'].'</td><td>'.$row['designation'].'</td><td>'.$row['emp_status'].'</td></tr>';
                }
            }
            $conn->close();
        ?>
        </table>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('table tr').click(function(){
            let id = $(this).attr('row.id');
            window.open("http://localhost/xampp/Design/erp2.php?id=" + id);
        });
    });
</script>
</html>