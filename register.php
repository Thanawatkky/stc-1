<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <title>Register</title>
</head>
<body>
        <div class="container">
            <div class="card mt-5 border-0">
                <div class="card-body">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 bg-light mx-auto py-5 px-5 float-center rounded">
                        <img class="rounded-circle d-block mx-auto" width="150px" src="img/background/login.png" alt="login img">
                        <form action="" method="post">
                            <h3 class="text-center mt-3 text-muted">Register Now</h3>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label class="form-label" for="">Username</label>
                                <input class="form-control" type="text" placeholder="Enter your username">
                            </div>
                            <div class="mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label class="form-label" for="">Password</label>
                                <input class="form-control" type="password"  placeholder="Enter your password">
                            </div>
                            
                            <div class="mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label class="form-label" for="">Fullname</label>
                                <input class="form-control" type="text" placeholder="Enter your fullname">
                            </div>
                            <div class="mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label class="form-label" for="">Address</label>
                                <textarea class="form-control" type="text" placeholder="Enter your address"></textarea>
                            </div>
                            <div class="mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label class="form-label" for="">Zipcode</label>
                                <input class="form-control" type="text" placeholder="Enter your zipcode">
                            </div>
                            <div class="mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label class="form-label" for="">Tel</label>
                                <input class="form-control" type="tel" pattern="[0-9]{10}" placeholder="Enter your tel">
                            </div>
                            <div class="mt-3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label class="form-label" for="">Profile</label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="text-center mt-2">
                                <p>Have an account? <a class="text-decoration-none" href="login.php">Register Now</a></p>
                                <small><p>Create restaurant account <a class="text-decoration-none" href="">Create now</a></p></small>
                                <small><p>Create rider account <a class="text-decoration-none" href="">Create now</a></p></small>
                            </div>
                            <div class="d-grid gap-2 mt-4 pt-2">
                                <button class="btn btn-primary">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="bootstrap\js\bootstrap.min.js"></script>
</body>
</html>