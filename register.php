<html>

<head>
    <link rel="stylesheet" type="text/css" href="formLogin.css">
</head>

<body>

    <div id="registerUser" >
        <form method="POST" action="collectForm.php">
            <h3> Sign Up</h3>
            <table>
                <tr>
                    <td>Name:</td>
                    <td> <input type="text" name="name" placeholder="Your family name"></td>
                </tr>
                <tr>

                    <td>E-mail: </td>
                    <td><input type="email" name="email" placeholder="ex: email@xyz.com"></td>
                </tr>
                <tr>
                    <td>username: </td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>password: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <input type="submit" name="submit" value="Register"> </td>
                <tr>
            </table>
        </form>
        <a href="formlogin_index.php" target='_self'>login</a>
    </div>
</body>

</html>