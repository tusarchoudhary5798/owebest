<?php 
     include('db.php');
$showAlert = false;  
$showError = false;  
$exists=false; 
    
if(isset($_POST['submit'])) { 
      
    // Include file which makes the 
    // Database Connection. 
     
    
    $username = $_POST["username"];  
    $password = $_POST["password"];  
    //$cpassword = $_POST["cpassword"]; 
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $address = $_POST["address"];
    $landmark = $_POST["landmark"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    // $pin_code = $_POST["pin_code"];
    
            
    
    $sql = "Select * from user1 where username='$username'"; 
    
    $result = mysqli_query($con, $sql); 
    
    $num = mysqli_num_rows($result);  
    
    // This sql query is use to check if 
    // the username is already present  
    // or not in our Database 
    if($num == 1) { 
        if( $exists==false) { 
    
            $hash = password_hash($password,  
                                PASSWORD_DEFAULT); 
                
            // Password Hashing is used here.  
            $sql = "INSERT INTO user1 ( username,  
                password,phone_no,email, address, landmark, city, state) VALUES ('$username',  
                '$hash','$phone_no','$email', `$address`, '$landmark', '$city', '$state')"; 
    
            $result = mysqli_query($con, $sql); 
    
            if ($result) { 
                $showAlert = true;  
            } 
        }  
        else {  
            $showError = "Passwords do not match";  
        }       
    }// end if  
    
   if($num>0)  
   { 
      $exists="Username not available";  
   }  
    
}//end if    
    
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

	// $servername = "localhost"; 
	// $username = "root"; 
	// $password = ""; 

	// $database = "geeksforgeeks"; 

	// // Create a connection 
	// $conn = mysqli_connect($servername, 
	// 	$username, $password, $database); 

	// // Code written below is a step taken 
	// // to check that our Database is 
	// // connected properly or not. If our 
	// // Database is properly connected we 
	// // can remove this part from the code 
	// // or we can simply make it a comment 
	// // for future reference. 

	// if($conn) { 
	// 	echo "success ohhh"; 
	// } 
	// else { 
	// 	die("Error". mysqli_connect_error()); 
	// } 
?> 


    <div class="container pt-5 my-5 border bg-success text-white">
        <form action="reg.php" method="post" class="row g-3">
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>