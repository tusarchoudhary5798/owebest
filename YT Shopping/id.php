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

              $foo=$row["filename"];

              $fooo = str_replace(' ', '', $foo);

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

    <title>My profile</title>
</head>

<body>
    <div class="card " style="width: 18rem; padding-left: 40px; padding-top: 40px;">
    <?php echo "<img src='picture/$row[filename]' style=width:70% height:70%>";?>
        <div class="card-body">
            
          
            <?php echo $row["name"];?>

            <p class="card-text"></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">phone number: <?php echo $row['phone']; ?></li>
            <li class="list-group-item">Email Address: <?php echo $row['address']; ?></li>
            <li class="list-group-item">Password: <?php echo $row['pass']; ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Coustmer Level</a>
            <p class="bg-warning" style="padding-left: 10px;">Gold </p>
            
        </div>
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

