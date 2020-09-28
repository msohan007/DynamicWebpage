<?php
// Start the session
session_start();
// check whether session variable exists
if (!isset($_SESSION['user_name'])) {
  echo '<p align="center" style="color:green; font-size:36px"> Please login first before you can visit this page! </p>';
  header("refresh:5, url=../formlogin.php");
  die();
} else {
  // Include connection configuration
  include_once('../connection.php');

  // Create a connection
  $conn = mysqli_connect('localhost', 'root', 'Shakil@1989', 'account');

  // check the connect
  if (!$conn) {
    die("Failed to connect");
  } else {
    // Create the query for users
    $sql = "SELECT * FROM logon";
    $result = mysqli_query($conn, $sql);

    // Create query for sections
    $sql_section = "SELECT * FROM section2";
    $result_section = mysqli_query($conn, $sql_section);

    // Create query for news
    $sql_news = "SELECT * FROM news";
    $result_news = mysqli_query($conn, $sql_news);
  }
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
    <h3>TABLE</h3>
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

      <table align='center' width='450px' border='2' margin='20px'>
        <tr bgcolor="#5f9ea0">
          <th> Name </th>
          <th> Email </th>
          <th> User name </th>
          <!--<th> Password </th> -->
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) :;
        ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <!--  <td><?php echo $row[3]; ?></td> -->
          </tr>
        <?php
        endwhile;
        ?>
      </table>
    </div>
  </div>
  <div id="footer">
    <h2>&copy; https://curiousplanet.net</h2>
  </div>
</body>
</html>