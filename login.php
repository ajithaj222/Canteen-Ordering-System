<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In!</title>
    <style>
        .lpart
        {
            background-color: black;
            float: left;
            width: 650px;
            height: 700px;
            text-align: center;
        }
        .rpart
        {
           text-align: center;
        }
        .fom
        {
            margin-left: 100px;
            line-height: 20px;
            font-size: x-large;
            font-weight: bold;
            text-align: center;
        }
        input
        {
            background: transparent;
            border: none;
            border-bottom: 2px solid #000000;
            width: 300px;
        }
        label {
            float: left;
            margin-left: 280px;
        }
    </style>
</head>
<body>
    <?php
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "acos";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check if connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Prepare the SQL statement
        $sql = "SELECT * FROM susers WHERE mail = '$email' AND pass = '$password'";
        $result = mysqli_query($conn, $sql);

        // Check if there is a matching user
        if (mysqli_num_rows($result) > 0) {
            echo "Login successful!";
            // Perform further actions or redirect to another page
            if ($email == "admin@gmail.com" && $password == "123456") {
                // Redirect to admin.html
                header("Location: admin.html");
                exit();
            }
            else
            {
                header("Location: index.php");
                exit();
            }
            } else {
                echo '<script>alert("Incorrect password");</script>';        }
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
    <div class="sect">
        <div class="lpart">
            <br>
            <img src="Blogo.png" alt="Logo" style="margin-top: 40px;">
            <br>
            <h5 style="line-height: 25px;color: white;font-size:20px;">"Don't let the small stuff hold you back;<br>why waste a minute on minute details that<br>steal your time?"</h5>
        </div>
        <div class="rpart">
            <img src="Wlogo.png" alt="Logo" height="50px" usemap="#acos">
                <map name="acos">
                    <area shape="rect" coords="1,2,510,130" href="ACOS.html" alt="" target="_self">
                </map>
            </a>
            <h1 style="font-size: 30px;">WELCOME TO ACOS</h1>
            <p style="font-size: x-large;"><b>LOGIN</b></p>
        </div>
        <div class="fom">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="email">EMAIL</label><br>
                <input type="email" name="email" id="email"><br>
                <br>
                <label for="password">PASSWORD</label><br>
                <input type="password" name="password" id="password"><br>
                <br>
                <label style="float: right;margin-right: 280px;font-size: medium;">FORGOT PASSWORD?</label><br><br>
                <input type="submit" name="submit" id="submit" value="Sign In" style="width: 130px;height: 40px;border: 1px solid black;background-color: #000000;border-radius: 20px;color: white;font-size: large;">
            </form>
            <br>
             <p style="font-size: smaller;font-weight: lighter;">--------or LogIn with---------</p>
             <img src="google.jpeg" alt="Google" height="30px" width="30px">
             <br>
             <br>
             <label style="font-size: medium;margin-left: 335px;">New?<a href="signup.php">Create Account</a></label>
        </div>
    </div>
    
</body>
</html>
