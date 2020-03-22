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
<?php
require "footer.php";
?>