<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp!</title>
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
    <div class="sect">
        <div class="lpart">
            <br>
            <a href="home.php"><img src="Blogo.png" alt="Logo" style="margin-top: 40px;"></a>
            <br>
            <h5 style="line-height: 25px;color: white;font-size:22px;">"Don't let the small stuff hold you back;<br>why waste a minute on minute details that<br>steal your time?"</h5>
        </div>
        <div class="rpart">
            <img src="Wlogo.png" alt="Logo" height="50px">
            <h1 style="font-size: 30px;">SIGN-UP</h1>
            <p style="font-size: large;"><b>Already a member?</b><a href="login.php" style="color:red;">Log In</a></p>
        </div>
        <div class="fom">
        <form method="POST" action="signup.php" onsubmit="myFunction()">
                <label for="nam">NAME</label><br>
                <input type="text" name="uname" id="uname" required><br>
                <br>
                <label for="mob">MOBILE NUMBER</label><br>
                <input type="text" name="mob" id="mob" maxlength="10" required><br>
                <br>
                <label for="mail">EMAIL</label><br>
                <input type="email" name="mail" id="mail" required><br>
                <br>
                <label for="pass">PASSWORD</label><br>
                <input type="password" name="pass" id="pass" required><br>
                <br>
                <label for="cpass">CONFIRM PASSWORD</label><br>
                <input type="password" name="cpass" id="cpass" required><br>
                <br>
                <input type="submit" name="sub" id="sub" value="Register" style="width: 130px;height: 40px;border: 1px solid black;background-color: #000000;border-radius: 20px;color: white;font-size: large;">
            </form>
            <script>
                function myFunction(){
                    alert("You have Successfully Registered!")
                }
            </script>
            <br>
             <p style="font-size: smaller;font-weight: lighter;">--------or SignUp with---------</p>
             <img src="google.jpeg" alt="Google" height="30px" width="30px">
        </div>
    </div>
<?php
// Assuming you have already established a database connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $uname = $_POST["uname"];
    $mob = $_POST["mob"];
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    // Perform validations
    $errors = [];

    if (empty($uname)) {
        $errors[] = "Username is required.";
    }

    if (empty($mail)) {
        $errors[] = "Email is required.";
    }
$host = 'localhost';  // Replace with your database hostname
$dbname = 'acos';  // Replace with your database name
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password

try {
    // Establish database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

    // If there are no validation errors
    if (empty($errors)) {
        // Prepare the SQL statement
        $sql = "INSERT INTO susers (uname, mob, mail,pass,cpass) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters and execute the statement
        $stmt->execute([$uname, $mob, $mail, $pass,$cpass]);

        // Check if the insertion was successful
        if ($stmt->rowCount() > 0) {
            echo "User added successfully!";
        } else {
            echo "Error adding user.";
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

// Close the database connection
$pdo = null;
?>

    
</body>
</html>