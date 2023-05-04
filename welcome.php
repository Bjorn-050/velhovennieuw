<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Medewerkers overheid | VeldhovenRp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welkom.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        * {
 text-align: center;
}
.politie {
 background-color: #0050d8;
 max-width: 30%;
 text-align: center;
 border-radius: 5px;
 padding: 10px;
 margin-left: 40%;
 margin-right: 40%;
 text-align: center;
 text-decoration: none;
}

.btn1 {
 color: #FFF;
}

.politie a {
 text-decoration: none;
 display: inline-block;
}

.politie a:hover {
 color: #FFF;
 transform: scale(120%);
}

.ambulance {
 background-color: #0050d8;
 max-width: 30%;
 text-align: center;
 border-radius: 5px;
 padding: 10px;
 margin-left: 40%;
 margin-right: 40%;
 text-align: center;
 text-decoration: none;
}

.ambulance a {
 text-decoration: none;
 display: inline-block;
}

.ambulance a:hover {
 color: #FFF;
 transform: scale(120%);
}

.subtitle {
 margin-bottom: 50px;
}
    </style>
</head>
<body>
 <div class="container">
  <h1 class="my-5">Welkom, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Fijne dienst toegewenst.</h1>
  <h2 class="subtitle">Kies de instantie waarvoor u werkt.</h2>
  <p>
      <a href="reset-password.php" class="btn btn-warning">Stel je wachtwoord opnieuw in</a>
      <a href="logout.php" class="btn btn-danger ml-3">Meld u af bij uw account</a>
  </p>
 </div>

 <div class="container">
  <p class="politie">
   <a href="assets/politie/politie.html" class="btn1">Politie</a>
  </p>
 </div>

 <div class="container">
  <p class="ambulance">
   <a href="assets/ambu/ambu.html" class="btn1">Ambulance</a>
  </p>
 </div>
</body>
</html>