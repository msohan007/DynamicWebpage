<?php
// Start the session
session_start();
// check whether session variable exists
if (!isset($_SESSION['user_name'])) {
  echo '<p align="center" style="color:green; font-size:36px"> Please login first before you can visit this page! </p>';
  header("refresh:5, url=../formlogin.php");
  die();
}


?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="myStyle.css">
  <script type="text/javascript" src="myScript.js">
  </script>
</head>

<body>
  <div>
    <button type="" style="float:left" onclick="small();"> - </button>
    <button type="" style="float:left" onclick="medium();"> +/- </button>
    <button type="" style="float:left" onclick="big();"> + </button>

    <button type="" style="float:right" onclick="red();"> Red </button>
    <button type="" style="float:right" onclick="green();"> Green </button>
    <button type="" style="float:right" onclick="blue();"> Blue </button>
    <button type="" style="float:right" onclick="orange();"> Orange </button>
    <button type="" style="float:right" onclick="init();"> Default </button>
  </div>

  <div class="header">

    <h1>CURIOUS PLANET</h1>
    <h3>CONTACT</h3>

  </div>

  <div class="topnav">
    <a href="home.php">Home</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="table.php">Table</a>
    <a href="../logout.php" style="float:right; color:orange;"><u> Logout </u></a>
    <p style='float:right; color:orange;'> Profile : <?php print_r($_SESSION['user_name']); ?> &nbsp;&nbsp;</p>
  </div>

  <div id="b_1">
    <aside id="asideId">
      <p style="color: blue;padding-left: 10%;padding-top: 10%;font-size: large;">
        <b>Address:</b><br>Street: 1272, Rue Panet, <br>City: Montreal,<br>Province: Quebec<br> Country:Canada
        <br><br>
        <strong>E-mail: </strong>msohan007@curiousplanet.net
        <br><br>
        <strong>Telephone: </strong>+1(514)153-6486
    </aside>


    <article id="gpsLocation">
      <iframe id="gpsIframe" name="iFrame1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.367620550645!2d-73.55472499289117!3d45.5196239365312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bae155fe77d%3A0x613559da4084d623!2s1272%20Rue%20Panet%2C%20Montr%C3%A9al%2C%20QC%20H2L%202Y8!5e0!3m2!1sen!2sca!4v1591681105519!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </article>
  </div>
  <div id="footer">
    <h2>&copy; https://curiousplanet.net</h2>
  </div>
</body>

</html>