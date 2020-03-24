<?php
require "header.php";
?>
<!-- <main>

    <div class="wrapper-main">
        <section class="section-default">
            <?php
            if (isset($_SESSION['idnum'])) {
                echo "<p>You are logged in !</p>";
            } else {
                echo "<p>You are logged out!</p>";
            }
            ?>

        </section>
    </div>
</main> -->
<!-- Autoslider -->
<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="../images/fashion1.jpg" />

    </div>

    <div class="mySlides fade">
        <img src="../images/fashion3.jpg" />

    </div>

    <div class="mySlides fade">
        <img src="../images/fashion4.jpg" />

    </div>

    <div class="mySlides fade">
        <img src="../images/fashion2.jpg" />

    </div>


</div>
<!-- End of autoslider -->

<h1 class="displaytitle">On Sale</h1>
<!-- full width horizontal slider -->
<div class="carousel-container">
    <div class="carousel-inner">
        <div class="track">
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/1.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/3.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$22.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/5.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$40.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/7.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$32.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/9.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$112.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/11.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$102.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/13.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$123.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/15.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$112.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/17.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$50.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/19.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$122.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/21.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$102.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/23.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$22.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/25.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$9.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">
                        <img src="../images/product/27.jpg">
                    </div>
                    <div class="info">
                        <span class="shop-item-price">$15.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nav">
        <button class="prev2">
            <i class="fas fa-angle-left"></i>
        </button>
        <button class="next2">
            <i class="fas fa-angle-right"></i>
        </button>
    </div>
</div>
<!-- end of horizontal slider -->

<!-- Display Session -->
<h1 class="displaytitle">Display Session</h1>
<section class="display-container">
    <div><img src="../images/product/1.jpg"></img></div>

    <div><img src="../images/product/2.jpg"></div>
    <div><img src="../images/product/3.jpg"></div>
    <div><img src="../images/product/4.jpg"></div>
    <div><img src="../images/product/5.jpg"></div>
    <div><img src="../images/product/6.jpg"></div>
    <div><img src="../images/product/7.jpg"></div>
    <div><img src="../images/product/8.jpg"></div>
    <div><img src="../images/product/9.jpg"></div>
    <div><img src="../images/product/10.jpg"></div>
    <div><img src="../images/product/11.jpg"></div>
    <div><img src="../images/product/12.jpg"></div>
    <div><img src="../images/product/13.jpg"></div>
    <div><img src="../images/product/14.jpg"></div>
    <div><img src="../images/product/15.jpg"></div>
    <div><img src="../images/product/16.jpg"></div>
    <div><img src="../images/product/17.jpg"></div>
    <div><img src="../images/product/18.jpg"></div>
    <div><img src="../images/product/19.jpg"></div>
    <div><img src="../images/product/20.jpg"></div>
    <div><img src="../images/product/21.jpg"></div>
    <div><img src="../images/product/22.jpg"></div>
    <div><img src="../images/product/23.jpg"></div>
    <div><img src="../images/product/24.jpg"></div>
    <div><img src="../images/product/25.jpg"></div>
    <div><img src="../images/product/26.jpg"></div>
    <div><img src="../images/product/27.jpg"></div>
    <div><img src="../images/product/28.jpg"></div>
    <div><img src="../images/product/29.jpg"></div>
    <div><img src="../images/product/30.jpg"></div>
</section>
<!-- End of display session -->
<?php
require "footer.php";
?>