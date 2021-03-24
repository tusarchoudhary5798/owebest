<!-- http://localhost/phpmyadmin/sql.php?db=userregistration&table=usertable&pos=0 -->

<!DOCTYPE html>
<html lang="en">


<?php
include('db.php');

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con , 'geeksforgeeks'); 

$username = $email = $password = $phone_no = $landmark  = $city = $state = $address = '' ;
$errors = array('username'=> '' , 'email' => '' , 'password' => '' , 'phone_no'=>'',
'landmark'=>'' , 'city' =>'' ,'state' => '' , 'address'=> ''  );


if(isset($_POST['submit'])){

// error filter array
if(array_filter($errors)){
echo '';
} else{

$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
$landmark = mysqli_real_escape_string($con, $_POST['landmark']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$address = mysqli_real_escape_string($con, $_POST['address']);








$s = " select * from user1 where username = '$username' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
// echo "Username Already Taken";
// check title
if(!empty($_POST['username'] )){
echo $errors['username'] = 'Username Already Taken <br />';
}
}else {



$reg = "INSERT INTO user1 ( username,  
password,phone_no,email, address, landmark, city, state) VALUES ('$username',  
'$password','$phone_no','$email', `$address`, '$landmark', '$city', '$state')"; 


mysqli_query($con, $reg);
// header('Location: /Form/home.php');
// echo "Welcome" .' ' . $user;
}
}
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Registration Form</title>
</head>

<body>
<?php 

	
?> 


    <div class="container pt-5 my-5 border bg-success text-white">
        <form action="reg1.php" method="post" class="row g-3">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Name" aria-label="City" name="username">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Phone No." aria-label="City" name="phone_no">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="OTP" aria-label="City" name="">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Varify Phone No.</button>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Landmark</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="landmark">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="city">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select" name="state">
                    <option selected>Rajasthan</option>
                    <option>Panjab</option>
                    <option>Haryana</option>
                    <option>Uttar Pradesh</option>
                    <option>Madhya Pradesh</option>
                    <option>Dehli</option>
                    <option>None of these</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="pincode">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" value="submit" name="submit">Register</button>
            </div>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    
</body>

</html>