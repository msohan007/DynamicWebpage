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
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
    <h3>ABOUT</h3>

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

     
        <table id="tb_jQueryEffect">
          <tr>
            <td><img id="montreal" class="j_img" src=".\touristSpot\montreal.jpg"></td>
            <td><img id="quebec" class="j_img" src=".\touristSpot\quebec.jpg"></td>
            <td><img id="miami" class="j_img" src=".\touristSpot\miami.jpg"></td>
            <td><img id="portugal" class="j_img" src=".\touristSpot\portugal.jpeg"></td>
          </tr>
          <tr>
            <td class="city_name">Montreal</td>
            <td class="city_name">Quebec City</td>
            <td class="city_name">Miami</td>
            <td class="city_name">Portugal</td>
          </tr>
        </table>

      

      <article id="descriptions"> 
        <h2 id="md">Method Descriptions</h2>
        <hr>
        <h4 id="h4_text"></h4>
      </article>

    </div>
  </div>

  <div id="footer">
    <h2>&copy; https://curiousplanet.net</h2>
  </div>

</body>


</html>