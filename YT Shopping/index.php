<!doctype html>
<html lang="en">

<head>

    <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 10px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #ddd;
        }

        .btn.active {
            background-color: #666;
            color: white;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <title>YT Shopping</title>
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">


</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">YT Shopping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white " aria-current="page" href="id.html">My profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="login.php">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="adminlogin.php">Admin Login</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="cwh.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact Us</a>
        </li>
        </ul>
        <ul class="nav  d-flex justify-content-end">
            <li><a href="cart.html" style="color: white;">&nbsp;&nbsp;<i class=" fas fa-cart-plus" style="color: yellow;"></i>
                    <sup>12</sup></a></li>
            <li><a href="cart.html" style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp; item : <i class=" fas fa-rupee-sign col-bg-5"
                        style="color: yellow;"></i>
                    12000 </a></li>


        </ul>
        
      </ul>
    </div>
  </div>
</nav>

    
    <div class="col-sm-11 my-5 mx-auto">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1600x500/?Shopping,grocery,buying" class="d-block w-100"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1600x500/?nuts,sugar,tea," class="d-block w-100" alt=" ">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1600x500/?delivery,home delivery" class="d-block w-100"
                        alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="btnContainer">
        <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button>
        <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
    </div>
    <br>

    <div class="row">
        <div class="column container row" style="background-color:#aaa;">
            <div class=" col-lg-2 col-sm-2 col-md-3">
                <img src="https://source.unsplash.com/500x500/?Shopping,grocery,buying" class="d-block w-100" alt="">
            </div>
            <div class='col-md-9 col-sm-11 col-lg-10'>
                <h2>product 1</h2>
                <p>price <i class=" fas fa-rupee-sign col-bg-5" > 500</i></p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>


        </div>

        <div class="column container row" style="background-color:#bbb;">
            <div class=" col-lg-2 col-sm-2 col-md-3">
                <img src="https://source.unsplash.com/500x500/?Shopping,grocery,buying" class="d-block w-100" alt="">
            </div>
            <div class='col-md-9 col-sm-11 col-lg-10'>
                <h2>product 2</h2>
                <p>price <i class=" fas fa-rupee-sign col-bg-5" ></i> 500</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column container row" style="background-color:#aaa;">
            <div class=" col-lg-2 col-sm-2 col-md-3">
                <img src="https://source.unsplash.com/500x500/?Shopping,grocery,buying" class="d-block w-100" alt="">
            </div>
            <div class='col-md-9 col-sm-11 col-lg-10'>
                <h2>product 3</h2>
                <p>price <i class=" fas fa-rupee-sign col-bg-5" > </i>500</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>


        </div>

        <div class="column container row" style="background-color:#bbb ;">
            <div class=" col-lg-2 col-sm-2 col-md-3">
                <img src="https://source.unsplash.com/500x500/?Shopping,grocery,buying" class="d-block w-100" alt="">
            </div>
            <div class='col-md-9 col-sm-11 col-lg-10'>
                <h2>product 4</h2>
                <p>price <i class=" fas fa-rupee-sign col-bg-5" > </i>500</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column container row" style="background-color:#aaa;">
            <div class=" col-lg-2 col-sm-2 col-md-3">
                <img src="https://source.unsplash.com/500x500/?Shopping,grocery,buying" class="d-block w-100" alt="">
            </div>
            <div class='col-md-9 col-sm-11 col-lg-10'>
                <h2>product 5</h2>
                <p>price <i class=" fas fa-rupee-sign col-bg-5" ></i> 500></p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>


        </div>

        <div class="column container row" style="background-color:#bbb;">
            <div class=" col-lg-2 col-sm-2 col-md-3">
                <img src="https://source.unsplash.com/500x500/?Shopping,grocery,buying" class="d-block w-100" alt="">
            </div>
            <div class='col-md-9 col-sm-11 col-lg-10'>
                <h2>product 6</h2>
                <p>price <i class=" fas fa-rupee-sign col-bg-5" ></i> 500</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    

    <script>
        // Get the elements with class="column"
        var elements = document.getElementsByClassName("column");

        // Declare a loop variable
        var i;

        // List View
        function listView() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.width = "100%";
            }
        }

        // Grid View
        function gridView() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.width = "50%";
            }
        }

        /* Optional: Add active class to the current button (highlight it) */
        var container = document.getElementById("btnContainer");
        var btns = container.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

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