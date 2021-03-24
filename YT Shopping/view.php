
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    .bt {
      margin: 1px;
      padding: 2px;
    }
     .th {
  border: 1px solid black;
  width: 30px;
  
}
table { 
			margin-left: auto; 
			margin-right: auto; 
			font-size: 20px; 
			height: 100%; 
			table-layout: fixed; 
		} 

		td { 
			border: 2px solid black; 
			text-align: center; 
			padding: 10px; 
		} 

		tr:nth-child(even) { 
			background-color: #00cf45; 
		} 

		h1 { 
			color: green; 
		} 

  </style>
  <link rel="stylesheet" href="css/font-awesome.css">
    <title>view</title>
  </head>
  <body>
    

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

              

            }

            
?>
<table>
  <center>
  <h1>All Details of <?php echo $row['name'] ?></h1>
  </center>
  
  <tr>
  
    <td>Name</td>
    <td>Phone</td>
    <td>password</td>
    <td>Address</td>
    <td>Picture</td>
  </tr>

<tr>


    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["pass"]; ?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo "<img src='picture/$row[filename]' style=width:110px height:100px>";?></td>

    
</tr>

</table>
 
           



  