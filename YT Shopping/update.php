<?php 

            $srvername = "localhost";
            $username = "root";
            $password="";
            $database="skit";
            $conn = mysqli_connect($srvername, $username, $password, $database);

            if(isset($_GET["id"]) ){

              $id = mysqli_real_escape_string($conn, $_GET['id']); 
              


              $query = "SELECT * FROM `logi` where id = '$id'";
  
              $result = mysqli_query($conn,$query);
  
              $row = mysqli_fetch_assoc($result);
              $name=$row["name"];
              $phone=$row["phone"];
              $address=$row["address"];

              $query1="UPDATE `logi` SET `name`=$name,`phone`=$phone,
              `address`=$address,`pass`=[value-4] WHERE id=$id";

              $result1 = mysqli_query($conn,$query1);
              if($result1)
              {
                header('Location: admindata.php');

              }
              else
              {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Update Records</title>
  </head>
  <body>
  <div class="container pt-5 my-5 border bg-success text-white">
    
        <h1 style="text-align:center ";>Updation form </h1>

        
        

             
        <form action="update.php" method='POST' enctype="multipart/form-data" class="row g-3">
        
        <center>
        <div class="col-6" >
             <label for="name">User Name</label>
             <input class="form-control " value="<?php echo $name; ?>" type="text" id="name" name="name"   ><br><br>
             </div>
            </center>

            <center>
        <div class="col-6" >
             <label for="name">Phone Number</label>
             <input class="form-control " value="<?php echo $phone; ?>" type="tel" id="phone" name="phone" placeholder= <?php echo $phone; ?> pattern=[0-9]{10} ><br><br>
             </div>
            </center>

            <center>
        <div class="col-6" >
        <label for="address"> Address</label>
            <input class="form-control" value="<?php echo $address; ?>" type="text" id="address" name="address" placeholder="plot no. X , ABC colony"><br><br>
             </div>
            </center>
             
            <hr>
                   <center class="col-4"><input class=" form-control bg-info" type="submit" value="Update" name='submit'></center>

             
             
             
                         
             

             
                 
             </div>

             

             

            
            
            
        </form>

    </div>

    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>

