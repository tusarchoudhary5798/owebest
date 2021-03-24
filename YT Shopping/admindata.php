<?php


            $srvername = "localhost";
            $username = "root";
            $password="";
            $database="skit";

            $conn = mysqli_connect($srvername, $username, $password, $database);

            $query = "SELECT * FROM `logi`";

            $result = mysqli_query($conn,$query);
?>
            

<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style>
    table,
    th,
    td {

      border: 1px solid blue;
      width: 70%;
      padding-left: 5px;
      padding-right: 5px;

    }
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Admin</title>
</head>

<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table>
  <center>
  <h1>User data</h1>
  </center>
  
  <tr>
  
    <td>Name</td>
    <td>Phone</td>
    <td>password</td>
    <td>Actions</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>


    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["pass"]; ?></td>
    <td><a href="view.php?id=<?php echo $row['id']; ?>  " abbr title="view"><i class="fas fa-eye"></i></a>
    <a href="update.php?id=<?php echo $row['id']; ?>" abbr title="Edit"><i class="fas fa-edit"></i></a>
    <a href="delete.php?id=<?php echo $row['id']; ?> " abbr title="Delete"><i class="fas fa-trash-alt"></i></a>
    </td>

    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  
</body>

</html>





