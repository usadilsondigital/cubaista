<!DOCTYPE html>
<html lang="en">

<head>
  <title>Page Title</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    * {
      box-sizing: border-box;
    }

    /* Style the body */
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    /* Header/logo Title */
    .header {
      padding: 40px;
      text-align: center;
      background: #1abc9c;
      color: white;
      background-image: linear-gradient(140deg, lightblue 0%, rgb(0, 177, 247) 50%, aqua 75%);
    }

    /* Increase the font size of the heading */
    .header h1 {
      font-size: 40px;
    }

    /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
    .navbar {
      overflow: hidden;
      background-color: #333;
      position: sticky;
      position: -webkit-sticky;
      top: 0;
    }

    /* Style the navigation bar links */
    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }


    /* Right-aligned link */
    .navbar a.right {
      float: right;
    }

    /* Change color on hover */
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Active/current link */
    .navbar a.active {
      background-color: #666;
      color: white;
    }

    /* Column container */
    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
    }

    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
      -ms-flex: 30%;
      /* IE10 */
      flex: 30%;
      background-color: #f1f1f1;
      padding: 20px;
      background-image: linear-gradient(140deg, lightblue 0%, rgb(0, 177, 247) 50%, aqua 75%);
    }

    /* Main column */
    .main {
      -ms-flex: 70%;
      /* IE10 */
      flex: 70%;
      background-color: white;
      padding: 20px;
    }

    /* Fake image, just for this example */
    .fakeimg {
      background-color: #aaa;
      width: 100%;
      padding: 20px;
    }

    /* Footer */
    .footer {
      padding: 20px;
      text-align: center;
      background: #ddd;
    }

    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
      .row {
        flex-direction: column;
      }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .navbar a {
        float: none;
        width: 100%;
      }
    }

    .error {
      color: #FF0000;
    }
  </style>

</head>

<body>
  <?php  
  $cars2 =null;
  $cars3 = null;
  if (!empty($_POST["based2"])) {
    $based2 = $_POST["based2"];    
    foreach ($based2 as $selectedOption2)
    echo $selectedOption2."\n";
  }
  if (!empty($_POST["based3"])) {
    $based3 = $_POST["based3"];
    foreach ($based3 as $selectedOption3)
    echo $selectedOption3."\n";
  }




/*
foreach($_GET as $key => $value){
  echo $key . " : " . $value . "<br />\r\n";
}
  /*
 Radio1
 email1
 checkin1
 checkout1
 hotel1
 type_room
 passengers
 additional_notes1


  Radio2
 email2
 name_agency
 based2
 website2
 additional_notes2


  Radio3
 email3
 based3
 website3
 additional_notes3

  Radio4
 email4
 checkin4
 checkout4
 hotel4
 additional_notes4
 
 $nombre_completo =  $_POST["nombre_completo"];
  $email = $_POST["email"];
  $nombre_company = $_POST["nombre_company"];
  $numero_whatssap = $_POST["numero_whatssap"];
  $website = $_POST["website"];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre_completo"])) {
      $nombre_companyErr = "nombre_compañia es requerido";
    } else if (empty($_POST["nombre_company"])) {
      $nombre_companyErr = "nombre_compañia es requerido";
    } else if (empty($_POST["numero_whatssap"])) {
      $numero_whatssapErr = "numero whatssap es requerido";
    } else if (empty($_POST["email"])) {
      $emailErr = "El Email es requerido";
    } else if (empty($_POST["website"])) {
      $website = "El Website es requerido";
    } else {

      $to      = 'nobody@example.com';
      $subject = 'the subject';
      $message = 'nombre:' . $nombre_completo . ' nombre_company:' . $nombre_company . ' whatssap:' . $numero_whatssap . ' email:' . $email . ' wbesite:' . $website;

      $headers = 'From: webmaster@example.com'       . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

      mail($to, $subject, $message, $headers);
    }
  }*/
  ?>

  <div class="header">
    <h3> You love Cuba? Or think you might? So, you're a Cubaista! </h3>
    <p>
    <h4>And we are your DMC <b style="color:navy">(Destination Management Company)</b></h4>
    </p>
  </div>

  <div class="navbar">
    <a href="index.html" class="active">Home</a>
    <a href="form.php">Formulario Clientes</a>
    <a href="#">Link</a>
    <a href="#" class="right">Link</a>
  </div>

  <div class="row">
    <div class="side">
      <h2>About Cubaism</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>More Text</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <div class="fakeimg" style="height:60px;">Image</div><br>
      <div class="fakeimg" style="height:60px;">Image</div><br>
      <div class="fakeimg" style="height:60px;">Image</div>
    </div>
    <div class="main">
      <h2>SIGN UP2</h2>
      

      <br><br>
      </form>











      <br>
    </div>
  </div>

  <div class="footer">
    <h2>Footer</h2>
  </div>
  <?php
  echo "<h2>Your Input:</h2>";
  echo $nombre_completo;
  echo "<br>";
  echo $nombre_company;
  echo "<br>";
  echo $website;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $numero_whatssap;
  ?>

</body>

</html>