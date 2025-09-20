<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ujian Online - Login</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login Ujian Online</h2>
        <form method="POST" action="index.php?action=login">
            <label>Username</label><br>
            <input type="text" name="username" required><br><br>

            <label>Password</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
