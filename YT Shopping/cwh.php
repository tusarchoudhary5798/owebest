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
    <div class="container pt-5 my-5 border bg-success text-white">
    
        <h1 style="text-align:center ";>Registration Form</h1>
        <form action="cwh.php" method='POST' enctype="multipart/form-data" class="row g-3">
        
             <div >
             <label for="name">Enter Name</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Tusar"  required><br><br>
             </div>
             <div >
             <label for="phone">Enter Phone number:</label>
            <input class="form-control" type="tel" id="phone" name="phone" placeholder="9876543210" pattern=[0-9]{10} required><br><br>
             </div>

             <div >
             <label for="address">Enter Address</label>
            <input class="form-control" type="text" id="address" name="address" placeholder="plot no. X , ABC colony" required><br><br>
            
             </div>

             <div >
             <label for="Password">Enter Password</label>
            <input class="form-control" type="password" id="pass" name="pass" placeholder="abcde@123"  required><br><br>
             </div>

            
            
            
           <input type="file" 
                   name="uploadfile" 
                   value="" /> 
                   <hr>
                   <center class="col-4"><input class=" form-control bg-info" type="submit" value="Register" name='submit'></center>
            
        </form>

    </div>
    <?php

if (isset($_POST['submit'])) 
        {
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $pass = $_POST['pass'];


            $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "picture/".$filename; 

        move_uploaded_file($tempname, $folder);
          
     
  

                       

            $srvername = "localhost";
            $username = "root";
            $password="";
            $database="skit";

            
            $conn = mysqli_connect($srvername, $username, $password, $database);

            if(!$conn)
            {
                echo 'connection deny';
            }
            else
            {
                echo 'connection successful';
            }
            $query= "INSERT INTO `logi`(name,`phone`, `address`,pass, filename) VALUES ('$name', '$phone','$address', '$pass', '$filename')";
            $done = mysqli_query($conn, $query);

            if($done)
            {
                echo '<div class="alert alert-primary" role="alert">
                registration successful
              </div>';
              echo '<script>alert("Registration Successful, Welcome to YT Shopping")</script>';

            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">
                registration failed...!
              </div>';
              echo '<script>alert("Something Went Wrong, Try Again")</script>';
            }

            // $quer = "SELECT * FROM `logi`";
            
            // $result = mysqli_query($conn,$quer);
            // echo mysqli_num_rows($result);
        }

      ?>


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