<?php
function connection()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "employee_db";

    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        die("Failed to connect to MySQL: " . $con->connect_error);
    }

    if (isset($_POST['save'])) {
        $fname = $_POST['firstName'];
        $mname = $_POST['middleName'];
        $lname = $_POST['lastName'];
        $gender = $_POST['Sex'];


        $insert = "INSERT INTO `employee`(`first_name`, `middle_name`, `last_name`, `gender`) 
                   VALUES ('$fname', '$mname', '$lname', '$gender')";


        if ($con->query($insert)) {
            echo "Data inserted successfully.";
        } else {
            echo "Error inserting data: " . $con->error;
        }
    }

    $con->close();
}




connection();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
    <body>

        <div class="container">
            <div class="row mt-4">

                <div class="p-3 mb-2 bg-light text-dark" style="text-align: center;" >
                    <h1><b>EMPLOYEE DETAILS</b></h1>
                </div>

                <div>
                    <br>
                </div>
                
                    <div class="card-body">
                                
                        <form action=" " method="post">
                            
                    
                            <div class="input-group mb-3">
                                <span class="input-group-text" >FIRST NAME</span>
                                <input type="text"  required id ="firstName" name="firstName" class="form-control" placeholder="First name">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" >MIDDLE NAME</span>
                                <input type="text" required id ="middleName" name="middleName" class="form-control" placeholder="Middle Name">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" >LAST NAME</span>
                                <input type="text" required id ="lastName" name ="lastName" class="form-control" placeholder="Last name">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">GENDER</span>
                                    <select class="form-control" required id ="gender" name ="Sex" >
                                        <option disabled selected>Choose Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                            </div>

                            <div style="text-align:center">
                                <button type="submit" class="btn btn-success" name="save">SAVE</button>
                            </div>
                        </form>
                    </div>
                    
            </div>
        </div>
    </body>
</html>