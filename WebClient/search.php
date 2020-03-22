<?php
include "header.php";
require "../Server/dbh.php";
?>



<div class="product-container">
    <?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST["searchinput"]);
        $sql = "SELECT * FROM product WHERE category LIKE '%$search%' OR content LIKE '%$search%' ;";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "<h2>There are " . $queryResult . " results!</h2>";
        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='product-box'>
                    <h3>PRICE : $" . $row["price"] . "<h3>
                    <h3>CATEGORY: " . $row["category"] . "<h3>
                    <h3>QUANTITY: " . $row["quantity"] . "<h3>
                    <h3>DESCRIPTION: " . $row["content"] . "<h3>
                    </div>";
            }
        } else {
            echo " There Are No results matching your search!";
        }
    }
    ?>
</div>
</body>

</html>