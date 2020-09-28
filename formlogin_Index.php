<html>

<head>
    <link rel="stylesheet" type="text/css" href="formLogin.css">
</head>

<body>

    <h1> WELCOME <br>TO CURIOUS PLANET </h1>

    <div align="center" class="mainFrame">
        <div calss="formBox">
            <div class="btnBox">
                <div id="btn"></div>
                <button type="button" id="login" class="toggleBtn" onclick="login()">Login </button>
                <button type="button" id="register" class="toggleBtn" onclick="register()">Register </button>
                <button></button>
            </div>
            <!--btnBox-->

            <form method="POST" action="login.php" id="loginF" class="loginForm">
                <table>
                    <tr>
                        <td>Username: </td>
                        <td><input class="inputField" type="text" name="user" placeholder="user id..."></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input class="inputField" type="password" name="password" placeholder="password..."></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <input class="btnSubmit" type="submit" name="submit" value="Submit"> </td>
                    <tr>
                </table>
            </form>
            <!--loginForm-->


            <form method="POST" action="collectForm.php" id="registerF" class="loginForm">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td> <input class="inputField" type="text" name="name" placeholder="Your full name"></td>
                    </tr>
                    <tr>

                        <td>E-mail: </td>
                        <td><input class="inputField" type="email" name="email" placeholder="ex: email@xyz.com"></td>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <td><input class="inputField" type="text" name="user" placeholder="userId..."></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input class="inputField" type="password" name="password" placeholder="password..."></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <input class="btnSubmit" type="submit" name="submit" value="Register"> </td>
                    <tr>
                </table>
            </form>
        </div>
        <!--formBox-->

    </div>
    <!--mainFrame-->
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");

        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
   
    </script>
</body>

</html>