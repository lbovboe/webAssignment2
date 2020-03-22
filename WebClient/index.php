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
        <img src="../images/iu5.jpg" />

    </div>

    <div class="mySlides fade">
        <img src="../images/iu6.jpg" />

    </div>

    <div class="mySlides fade">
        <img src="../images/iu7.jpg" />

    </div>

    <div class="mySlides fade">
        <img src="../images/iu8.jpg" />

    </div>


</div>
<!-- End of autoslider -->

<!-- full width horizontal slider -->
<div class="carousel-container">
    <div class="carousel-inner">
        <div class="track">
            <div class="card-container">
                <div class="card">
                    <div class="img">1</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">2</div>
                    <div class="info">
                        Title 2
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">3</div>
                    <div class="info">
                        Title 3
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">4</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">5</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">6</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">7</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">8</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        Title 1
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img">9</div>
                    <div class="info">
                        Title 1
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
<h2 class="displaytitle">Display Session</h2>
<section class="display-container">
    <div><img src="../images/Product/clothes/adidas1.jpg"></img></div>
    <div><img src="../images/Product/clothes/adidas.jpg"></div>
    <div><img src="../images/Product/clothes/adidas2.jpg"></div>
    <div><img src="../images/Product/clothes/adidas3.jpg"></div>
    <div><img src="../images/Product/clothes/weiyi2.jpg"></div>
    <div><img src="../images/Product/clothes/weiyi3.jpg"></div>
    <div><img src="../images/Product/clothes/weiyi4.jpg"></div>
    <div><img src="../images/Product/glasses/glasses.jpg"></div>
    <div><img src="../images/Product/glasses/glasses1.jpg"></div>
    <div><img src="../images/Product/glasses/glasses2.jpg"></div>
    <div><img src="../images/Product/glasses/glasses3.jpg"></div>
    <div><img src="../images/Product/glasses/glasses4.jpg"></div>
    <div><img src="../images/Product/glasses/glasses5.jpg"></div>
    <div><img src="../images/Product/perfurm/perfurm.jpg"></div>
    <div><img src="../images/Product/perfurm/perfurm1.jpg"></div>
    <div><img src="../images/Product/perfurm/perfurm2.jpg"></div>
    <div><img src="../images/Product/perfurm/perfurm3.jpg"></div>
    <div><img src="../images/Product/perfurm/perfurm4.jpg"></div>
    <div><img src="../images/Product/perfurm/perfurm5.jpg"></div>
    <div><img src="../images/Product/sports/adidas.jpg"></div>
    <div><img src="../images/Product/sports/bag.jpg"></div>
    <div><img src="../images/Product/sports/bag1.jpg"></div>
    <div><img src="../images/Product/sports/bag2.jpg"></div>
    <div><img src="../images/Product/sports/nike.jpg"></div>
    <div><img src="../images/Product/sports/nike1.jpg"></div>
    <div><img src="../images/Product/suitcase/suitcase.jpg"></div>
    <div><img src="../images/Product/suitcase/suitcase1.jpg"></div>
    <div><img src="../images/Product/suitcase/suitcase2.jpg"></div>
    <div><img src="../images/Product/suitcase/suitcase3.jpg"></div>
    <div><img src="../images/Product/suitcase/suitcase4.jpg"></div>
    <div><img src="../images/Product/suitcase/suitcase5.jpg"></div>
    <div><img src="../images/Product/wash/shampoo.jpg"></div>
    <div><img src="../images/Product/wash/shampoo1.jpg"></div>
    <div><img src="../images/Product/wash/showergel.jpg"></div>
    <div><img src="../images/Product/wash/showergel1.jpg"></div>
    <div><img src="../images/Product/wash/toothbrush.jpg"></div>
    <div><img src="../images/Product/wash/toothpaste.jpg"></div>
</section>
<!-- End of display session -->
<?php
require "footer.php";
?>