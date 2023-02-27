<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paprotek</title>
        <link rel="stylesheet" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div class="container">
            <div class="title">Login</div>
            <form action="login.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="Username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="Email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" name="Password" placeholder="Enter your password" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="foot">
                <a href="register.php">Rejestracja</a>
            </div>
        </div>
    </body>