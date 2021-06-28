<!doctype html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>

<body>
    <?php include('include/navbar.php') ?>

    <div class="container-fluid signin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 border-right">
                    <div class="text-center">
                        <h5 class="font-weight-bold">SIGN IN</h5>
                        <p>Welcome back! Sign in to checkout faster.</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-check d-flex justify-content-between">
                            <div class="remember-me">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <span>Remember Me</span>
                            </div>
                            <div class="forgotpass">
                                <a href="">Forgot my Password?</a>
                            </div>
                        </div>
                        <button type="submit" class="filled-btn full-width-btn my-3">SIGN IN</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <h5 class="font-weight-bold">SIGN UP</h5>
                        <p>New to Tobi? Create an account to make shopping and checkout easier. #ShopTobi now</p>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="first-name">First Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name">
                                </div>  
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name">
                                </div>  
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="filled-btn full-width-btn">SIGN UP</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include('include/footer.php') ?>
</body>

</html>