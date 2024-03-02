<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register in Project-Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Ankit2.css">
</head>
<body>

    <h1><b>Sign-up your Account</b></h1>

    <p><b>Project ID:</b> <span id="project-id-placeholder"></span></p>
    
    <?php
    if (isset($_POST["submit"])){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();
        if(empty($first_name) OR empty($last_name) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
          array_push($errors,"All fields are required");

        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors,"Email is not valid");
        }
        if (strlen($password) < 8) {
            array_push($errors,"Password must be at least 8 characters long");
        }
        if($password!==$passwordRepeat){
            array_push($errors,"Password does not match");
        }
        require_once "database.php";
        $sql = "SELECT * FROM ankit WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if($rowCount > 0){
            array_push($errors,"Email already exists");
        }
        if(count($errors)>0){
            foreach ($errors as $error){
                echo "<div class='alert alert-danger'>$error</div>";
        }  
    }else{
        
        $sql = "INSERT INTO ankit (full_name, last_name, email, password) VALUES ( ?, ?, ? ,? )";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt,"$sql");
        if($prepareStmt){
            mysqli_stmt_bind_param($stmt,"ssss", $first_name,$last_name, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are Registered successfully.</div>";
        }else{
            die("Something went wrong");
    }   
}
    }
    ?>

    <form action="Ankit2.php" method="post" autocomplete="off">
        <label for="first_name">First Name:</label>
        <input type="text"  class="form-control" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required>

        <label for="email">Email Address:</label>
        <input type="text" class="form-control" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="text" class="form-control" id="password" name="password" required>

        <label for="repeat_password">Confirm Password:</label>
        <input type="text" class="form-control" id="repeat_password" name="repeat_password" required>
        

        
        <input type="submit" class="btn btn-primary" value="register" name="submit">
    </form>
 

    <a href="ankitdas1.php">Sign-in page</a>
</body>
</html>

