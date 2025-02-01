<html>

<head>
    <title>
        login
    </title>
    <link rel="stylesheet" href="logIn.css">
    <script src="logIn.js"></script>
</head>

<body>
    <div class="mainContainer">
        <div class="heading">
            <img src="shoe/Image/Shoe__1_-removebg-preview.png" alt="shoeVault">
        </div>
        <div class="container">
            <form action="backend/logIn.php" method="POST" id="myform">
                <input type="email" name="email" id="em" placeholder="Enter your Email">
                <span id="emailError" class="error-message"></span>
                <input type="password" name="pass" id="pass" placeholder="Enter your Passowrd">

                <?php if (isset($_GET["err"]) && $_GET["err"] == 1) { ?>
                    <span id="passwordError" class="error-message">Your email or password doesnot match </span><br>
                <?php } ?>

                <span id="passwordError" class="error-message"></span><br>

                <input type="submit" name="submit" id="submit" value="Log In">
                
                <div class="create cent ">
                    <a href="#" onclick="popUp()">Create new account</a>
                </div>
            </form>
        </div>
    </div>
    <div class="popUp">
        <div class="popUpContent">
            <div class="crosbar">
                <img src="shoe/icons/circle-xmark-regular.svg" alt="crosssbar" onclick="exitPopUp()">
            </div>
            <div class="popUpHeader">
                <p>Sign Up</p>
                <p id="second">Become a part of us</p>
            </div>
            <hr>
            <div class="popUpForm">
                <form action="backend/createNewAccount.php" method="POST">
                    <input type="text" name="username" id="uName" class="uName" placeholder=" UserName">
                    <input type="email" name="eml" id="eml" class="empass" placeholder="Email" required>
                    <input type="password" name="password" id="password" class="empass" placeholder="New Password" required>
                    <div class="submit">
                        <input type="submit" name="signUp" id="signUp" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>