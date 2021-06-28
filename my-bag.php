<!doctype html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>

<body>
    <?php include('include/navbar.php') ?>

    
    <div class="container-fluid shopping-bag">
        <div class="container my-4">
            <div class="heading py-3">
                My Shopping Bag
            </div>
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>ITEM</th>
                        <th>QTY</th>
                        <th>ACTIONS</th>
                        <th>SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="items">
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <img src="assets/img/clothes/img1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-8 item-info">
                                    <button class="empty-btn my-2">
                                        Back In Stock
                                    </button>
                                    <div class="name">
                                        <h6 class="product-name font-weight-bold">BurBerry</h6>
                                        <div class="product-detail">Skirt Set in Light Blue</div>
                                        <div class="color">Antique Yellow Check</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="qty">
                            <div>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>QTY</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </td>
                        <td class="actions">
                            <div><a href="">Move to Wish List</a>
                                <a href="">Remove</a>
                            </div>
                        </td>
                        <td class="subtotal">
                            <div>$10012</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="items">
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <img src="assets/img/clothes/img3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-8 item-info">
                                    <button class="empty-btn my-2">
                                        Back In Stock
                                    </button>
                                    <div class="name">
                                        <h6 class="product-name font-weight-bold">BurBerry</h6>
                                        <div class="product-detail">Skirt Set in Light Blue</div>
                                        <div class="color">Antique Yellow Check</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="qty">
                            <div>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>QTY</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </td>
                        <td class="actions">
                            <div><a href="">Move to Wish List</a>
                                <a href="">Remove</a>
                            </div>
                        </td>
                        <td class="subtotal">
                            <div>$10012</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <div class="total row">
                <div class="payment-brands col-lg-6">
                    <div class="links">
                        <a href="">Continue Shopping</a>
                        <a href="">Save My Bag For Later</a>
                    </div>
                    <p>
                        Free International Shippping For Orders Above $100 USD
                    </p>
                    <div class="brand-logos">
                        <img src="assets/img/payment-logos/visa.png" alt="">
                        <img src="assets/img/payment-logos/master-card.png" alt="">
                        <img src="assets/img/payment-logos/american-expres.png" alt="">
                        <img src="assets/img/payment-logos/jcb.jpeg" alt="">
                        <img src="assets/img/payment-logos/paypal.png" alt="">
                    </div>
                    <div class="contact">
                        <p>Need Assitance: (000) 432-12345 </p>
                        <p>Live Chat (OFFLINE)</p>
                    </div>
                </div>
                <div class="payment-calc col-lg-6">
                    <div class="subtotal">
                        <span>Subtotal(2)</span>
                        <span class="px-4">$120394</span>
                    </div>
                    <div class="sales-tax">
                        <span>Estimated Sales Tax</span>
                        <span class="px-4">$0</span>
                    </div>
                    <div class="shipping">
                        <span>Free Shipping <a href="">Options</a></span>
                        <span class="px-4">$0</span>
                    </div>
                    <hr>
                    <div class="promo">
                        <input type="text" placeholder="Promo Code">
                        <button class="empty-btn">Apply</button>
                    </div>
                    <div class="total-payment my-3">
                        <span class="font-weight-bold">Estimated Total</span>
                        <span class="px-4">$1,660</span>
                    </div>
                    <a href="checkout.php" class="filled-btn btn-a">Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php') ?>
</body>

</html>