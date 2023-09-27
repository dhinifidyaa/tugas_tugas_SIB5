<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="form_login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Login">
    </form>

    <?php
    function cekLogin($username, $password) {
        if ($username === 'admin' && $password === 'mimin') {
            header('Location: admin.php');
            exit;
        } else {
            echo "Login gagal. Silakan coba lagi.";
        }
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        cekLogin($username, $password);
    }
    ?>
</body>
</html>