<!-- TODO Application entry point. Login view -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/login.css" rel="stylesheet">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js" defer></script>
    <title>Employee manager</title>
</head>

<body>

    <section class="m-0 vh-100 row justify-content-center align-items-center">
        <form method="post" action="./src/library/loginManager.php" class="col-auto p-5 text-center bg-light">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="usermail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" require class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button id="submit" type="submit" class="btn btn-warning">Login</button>
        </form>
    </section>

</body>

</html>