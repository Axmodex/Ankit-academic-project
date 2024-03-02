<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get you Academic project register in the biggest project library">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="ankitdas1.css">
    <title>Welcome to Project-Hub</title>
</head>

<body>
    <img src="image/icons8-book-64 (1).png" alt="library image">
    <div class="welcome flex justify align-center">
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM ankit WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    header("Location: homepage.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }

            } else {
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }

        }

        ?>

        <div class="left border">

            <div class="signin">
                <h1>Sign-in</h1>
                <form action="ankitdas1.php" method="post">
                    <div>
                        <label for="email">Email ID :-
                            <input type="email" id="email" name="email" placeholder="Email ID">
                            <img src="image/user (1).svg" alt=""></label>
                    </div>
                    <div>
                        <label for="password">Password :-</label>
                        <input type="password" name="password" id="password" placeholder="password">
                        <img src="image/icons8-password-64.png" alt="">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Remember me</label>

                    </div>
                    <input type="submit" value="login" name="login" class="btn">

                </form>

            </div>
        </div>

        <div class="right border ">
            <div class="signup">
                <h1>Welcome To Project-Hub</h1>
                <h4>don't have an account?</h4>
            </div>

            <button type="submit" onclick="location.href='Ankit2.php'">Register</button>
        </div>
    </div>
    </div>

</body>

</html>