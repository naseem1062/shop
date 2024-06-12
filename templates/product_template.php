<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Book Holder</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="../js/single_product.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- HEADER -->

    <header>
        <div class="container">
            <div class="navbar">
                <a class="logo" href="../index.html">Furnish</a>
                <ul class="nav-list">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../shop.html">Shop</a></li>
                    <li><a href="../account.html">Account</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../contact.html">Contact</a></li>
                </ul>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="qodef-wishlist-heart-svg" x="0px" y="0px"
                        width="17.5px" height="15.542px" viewBox="1.075 1.364 17.5 15.542">
                        <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                            d="M16.674,3.385	c-1.644-1.644-4.309-1.644-5.953,0c-0.001,0-0.001,0-0.001,0L9.907,4.198l-0.81-0.813c-1.645-1.644-4.313-1.644-5.956,0	c-1.645,1.644-1.645,4.312,0,5.957l0.812,0.81l5.954,5.956l5.956-5.956l0.811-0.81c1.644-1.645,1.646-4.311,0.002-5.955	C16.676,3.387,16.676,3.386,16.674,3.385z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="qodef-dropdown-cart-svg" width="19.816" height="18"
                        viewBox="51.878 -0.952 19.816 18">
                        <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M57.33-.197L54.843 3.12v11.61c0 .916.742 1.658 1.659 1.658h11.609c.917 0 1.659-.742 1.659-1.658V3.12L67.283-.197H57.33zM54.843 3.12h14.928M65.624 6.438a3.317 3.317 0 11-6.634 0">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- SINGLE PRODUCT PAGE -->

    <section>
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="../<?php echo $row['img_name']; ?>" alt="" width="100%">
                </div>
                <div class="col-2">
                    <p><?php print $row['name']; ?></p>
                    <h1><?php echo $row['name']; ?></h1>
                    <small>$<?php print $row['price']; ?></small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua ullamco laboris nisi.</p>
                    <div class="order">
                        <select>
                            <option>Select Quantity</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                    <a href="#" class="wish">
                        <svg xmlns="http://www.w3.org/2000/svg" class="qodef-wishlist-heart-svg" x="0px" y="0px"
                            width="17.5px" height="15.542px" viewBox="1.075 1.364 17.5 15.542">
                            <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                d="M16.674,3.385	c-1.644-1.644-4.309-1.644-5.953,0c-0.001,0-0.001,0-0.001,0L9.907,4.198l-0.81-0.813c-1.645-1.644-4.313-1.644-5.956,0	c-1.645,1.644-1.645,4.312,0,5.957l0.812,0.81l5.954,5.956l5.956-5.956l0.811-0.81c1.644-1.645,1.646-4.311,0.002-5.955	C16.676,3.387,16.676,3.386,16.674,3.385z">
                            </path>
                        </svg>
                        Add To Wishlist
                    </a>
                    <div class="other-details">
                        <h4>Product Code: <span>4112</span></h4>
                        <h4>Category: <span></span></h4>
                        <h4>Tags: <span></span></h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- RELATED PRODUCTS -->
        <div class="medium-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <a href="../shop.html" class="view-more">View More</a>
            </div>
            <div class="row">
                <div class="col-4">
                    <a href="soft-glow.html">
                        <img src="../images/shop-7.jpg">
                        <h4>Soft Glow</h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>$15</p>
                    </a>
                </div>
                <div class="col-4">
                    <a href="wall-art.html">
                        <img src="../images/shop-8.jpg">
                        <h4>Wall Art</h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <p>$15</p>
                    </a>
                </div>
                <div class="col-4">
                    <a href="rubber-plant.html">
                        <img src="../images/shop-1.jpg">
                        <h4>Rubber Plant</h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>$15</p>
                    </a>
                </div>
                <div class="col-4">
                    <a href="tea-kettle.html">
                        <img src="../images/shop-2.jpg">
                        <h4>Tea Kettle</h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>$15</p>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- FOOTER SECTION -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <a class="logo" href="../index.html">Furnish</a>
                    <p>Affordable and Best Furnitures For Every Home</p>
                </div>
                <div class="footer-col-2">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">Plans</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Store Locator</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Affiliate</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instgram</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>