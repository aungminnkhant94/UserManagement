<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
        }
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>

        <?php if (isset($_GET['registered'])): ?>
            <div class="alert alert-success">
                Account created. Please login.
            </div>
        <?php endif ?>

        <?php if (isset($_GET['suspended'])): ?>
            <div class="alert alert-danger">
                Your account is suspended.
            </div>
        <?php endif ?>
        
        <?php if (isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning">
                Incorrect Email or Password
            </div>
        <?php endif ?>

        <form action="_actions/login.php"method="post">
            <input type="email"name="email" class="form-control mb-2"placeholder="Email"required>
            <input type="password"name="password"class="form-control mb-2"placeholder="Password"required>
            <button class="w-100 btn btn-lg btn-primary"type="submit">
                login
            </button>
        </form>
        <br>
        <a href="register.php">Register</a>
    </div>
</body>
</html>