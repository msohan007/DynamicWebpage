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
    <h3>HOME</h3>

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
    <div id="b_2">
      <img id="screen" src="./images/img1.jpg">

      <div id="img_list">
        <ul>
          <li><a onclick="image_1()"><img class="h_img" src=".\images\img1.jpg"></a></li>
          <li><a onclick="image_2()"> <img class="h_img" src=".\images\img2.jpg"></a></li>
          <li><a onclick="image_3()"><img class="h_img" src=".\images\img3.jpg"></a></li>
          <li><a onclick="image_4()"><img class="h_img" src=".\images\img4.jpg"></a></li>
          <li><a onclick="image_5()"><img class="h_img" src=".\images\img5.jpg"></a></li>
          <li><a onclick="image_6()"><img class="h_img" src=".\images\img6.jpg"></a></li>

        </ul>
      </div>
    </div>
  </div>
  <div id="footer">
    <h2>&copy; https://curiousplanet.net</h2>
  </div>


</body>

</html>