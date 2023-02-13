<?php
$insert = false;
if(isset($_POST['dept'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $dept = $_POST['dept'];
    $tname = $_POST['tname'];

    $idA = $_POST['idA'];
    $nameA = $_POST['nameA'];
    $batchA = $_POST['batchA'];
  
    $idB = $_POST['idB'];
    $nameB = $_POST['nameB'];
    $batchB = $_POST['batchB'];
   
    $idC = $_POST['idC'];
    $nameC = $_POST['nameC'];
    $batchC = $_POST['batchC'];
   

    $sql = "INSERT INTO `trip`.`team` (`dept`, `tname`, `idA`, `nameA`, `batchA`, `idB`, `nameB`, `batchB`, `idC`, `nameC`, `batchC`) VALUES ('$dept', '$tname', '$idA', '$nameA', '$batchA', '$idB', '$nameB', '$batchB', '$idC', '$nameC', '$batchC');";
    // echo $sql;

     if($con->query($sql) == true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE Fest</title>
    <!-- Font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,500&family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- Link to css  -->
    <link rel="stylesheet" href="style.css">
    <!-- Link to bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="PUST image is not found">
    <nav class="navbar bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="readme.php">Admin</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn bg-secondary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
        <h1>Welcome to PUST CSE Fest</h3>
        <p class="text-primary">Enter your details and submit this form to confirm your participation in the fest </p>
         <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the fest</p>";
        }
    ?> 
    <!-- navigation bar  -->
    
        <form action="index.php" method="post">
            <input class="mb-2 dept" type="text" name="dept" id="dept" placeholder="Enter your department name">
            <input class="mb-2 tname" type="text" name="tname" id="tname" placeholder="Enter your team name">
            <div class="stu-details d-flex mt-5">

                <div class="contestant me-5 d-flex flex-column w-100">
                    <p class="p-3 mb-2 bg-warning text-dark rounded">First Contestant Information</p>
                    <input class="mb-2 id" type="text" name="idA" id="idA" placeholder="Enter your id">
                    <input class="mb-2 name" type="text" name="nameA" id="nameA" placeholder="Enter your name">
                    <input class="mb-2 batch" type="text" name="batchA" id="batchA" placeholder="Enter your batch">
                </div>
                <div class="contestant ms-5 me-5 d-flex flex-column w-100">
                    <p class="p-3 mb-2 bg-warning text-dark rounded">Second Contestant Information</p>
                    <input class="mb-2 id" type="text" name="idB" id="idB" placeholder="Enter your id">
                    <input class="mb-2 name" type="text" name="nameB" id="nameB" placeholder="Enter your name">
                    <input class="mb-2 batch" type="text" name="batchB" id="batchB" placeholder="Enter your batch">
                </div>
                <div class="contestant ms-5 d-flex flex-column w-100">
                    <p class="p-3 mb-2 bg-warning text-dark rounded">Third Contestant Information</p>
                    <input class="mb-2 id" type="text" name="idC" id="idC" placeholder="Enter your id">
                    <input class="mb-2 name" type="text" name="nameC" id="nameC" placeholder="Enter your name">
                    <input class="mb-2 batch" type="text" name="batchC" id="batchC" placeholder="Enter your batch">
                </div>
                
            </div>

            <button class="btn mt-3 bg-primary" > Submit</button> 
        </form>
    </div>
    <script src="bootstrap.min.js"></script>
</body>
</html>