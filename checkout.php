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
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>United Kingdom</option>
                                <option>United States</option>
                                <option>Peru</option>
                                <option>Colombia</option>
                                <option>Mexico</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="form-group">
                            <label for="address">street name, house address</label>
                            <input type="text" class="form-control" id="name" aria-describedby="address">
                        </div>
                        <div class="form-group">
                            <label for="address">address line 2 <em>optional</em></label>
                            <input type="text" class="form-control" id="name" aria-describedby="address">
                        </div>
                        <div class="form-group">
                            <labe/l for="city">town/city</label>
                            <input type="text" class="form-control" id="city" aria-describedby="city">
                        </div>
                        <div class="form-group">
                            <label for="state">province/ county/ state</label>
                            <input type="text" class="form-control" id="city" aria-describedby="city">
                        </div>
                        <div class="form-group">
                            <label for="city">postcode</label>
                            <input type="number" class="form-control" id="city" aria-describedby="city">
                        </div>
                        <div class="form-group">
                            <label for="phone-no">phone <em>(should you order need verification)</em></label>
                            <input type="number" class="form-control" id="city" aria-describedby="city">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address <em>(required for order notification)</em></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-check">
                            <div class="remember-me">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <span>Be the first to knwo about the new arrivals, sales & promos by submitting your email. You can opt out at any time, <a href="Privacy.php">privaciy policy</a></span>
                            </div>
                        </div>
                        <div class="my-4 d-flex justify-content-between">
                                <div>
                                    <h6 class="font-weight-bold">Create an account ?</h6>
                                    <p>Save your information for future checkouts</p>
                                </div>
                                <div>
                                    <button class="empty-btn">YES</button>
                                    <button class="filled-btn">NO  </button>
                                </div>
                        </div>
                        <button class="filled-btn full-width-btn">Save & Continue</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="data-rows">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <img src="assets/img/clothes/img1.jpg" class="img-fluid" width="200" alt="">
                            </div>
                            <div class="col-lg-9 item-info p-4">
                                <div class="name">
                                    <h6 class="product-name font-weight-bold">BurBerry</h6>
                                    <div class="product-detail">Skirt Set in Light Blue</div>
                                    <div class="color"><span>Antique Yellow Check</span></div>
                                    <div class="size"><span>M / Quantity: 1</span></div>
                                    <div class="price"><span>$234.12</span></div>
                                    <button class="empty-btn my-2">
                                        Back In Stock
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <img src="assets/img/clothes/img3.jpg" class="img-fluid" width="200" alt="">
                            </div>
                            <div class="col-lg-9 item-info p-4">
                                <div class="name">
                                    <h6 class="product-name font-weight-bold">Skirt Set in Light Blue</h6>
                                    <div class="product-detail">BurBerry</div>
                                    <div class="color"><span>Antique Yellow Check</span></div>
                                    <div class="size"><span>M / Quantity: 1</span></div>
                                    <div class="price"><span>$234.12</span></div>
                                    <button class="empty-btn my-2">
                                        Back In Stock
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-calc">
                        <div class="subtotal">
                            <span>Subtotal(2)</span>
                            <span class="">$120394</span>
                        </div>
                        <div class="sales-tax">
                            <span>Vat</span>
                            <span class="">$0</span>
                        </div>
                        <div class="shipping">
                            <span>Estimatic Shipping</span>
                            <span class="">Free</span>
                        </div>
                        <div class="total-payment font-weight-bold my-3">
                            <span>Estimated Total</span>
                            <span>$1,660</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php include('include/footer.php') ?>
</body>

</html>