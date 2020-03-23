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
                    <div class="img">1</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img"><img src="../images/product/1.jpg"></div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">3</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">4</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">5</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">6</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">7</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">8</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
                        <button class="shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        <span class="shop-item-price">$12.99</span>
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
    <div><img src="../images/Product/1.jpg"></img></div>
    <div><img src="../images/Product/2.jpg"></div>
    <div><img src="../images/Product/3.jpg"></div>
    <div><img src="../images/Product/4.jpg"></div>
    <div><img src="../images/Product/5.jpg"></div>
    <div><img src="../images/Product/6.jpg"></div>
    <div><img src="../images/Product/7.jpg"></div>
    <div><img src="../images/Product/8.jpg"></div>
    <div><img src="../images/Product/9.jpg"></div>
    <div><img src="../images/Product/10.jpg"></div>
    <div><img src="../images/Product/11.jpg"></div>
    <div><img src="../images/Product/12.jpg"></div>
    <div><img src="../images/Product/13.jpg"></div>
    <div><img src="../images/Product/14.jpg"></div>
    <div><img src="../images/Product/15.jpg"></div>
    <div><img src="../images/Product/16.jpg"></div>
    <div><img src="../images/Product/17.jpg"></div>
    <div><img src="../images/Product/18.jpg"></div>
    <div><img src="../images/Product/19.jpg"></div>
    <div><img src="../images/Product/20.jpg"></div>
    <div><img src="../images/Product/21.jpg"></div>
    <div><img src="../images/Product/22.jpg"></div>
    <div><img src="../images/Product/23.jpg"></div>
    <div><img src="../images/Product/24.jpg"></div>
    <div><img src="../images/Product/25.jpg"></div>
    <div><img src="../images/Product/26.jpg"></div>
    <div><img src="../images/Product/27.jpg"></div>
    <div><img src="../images/Product/28.jpg"></div>
    <div><img src="../images/Product/29.jpg"></div>
    <div><img src="../images/Product/30.jpg"></div>

</section>
<!-- End of display session -->
<?php
require "footer.php";
?>