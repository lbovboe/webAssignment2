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
<?php
require "footer.php";
?>