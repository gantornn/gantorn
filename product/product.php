<div class="container">
    <h2 class="my-4">Product list</h2>
    <div class="row">
        <?php
        require_once('../database/db_connection.php');
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md4>';
                echo '<div class="card product-card">';
                echo '<img src="' . $row['image'] . $row['name'] . '</h5>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">';
                echo '<p class="card-text">Price: ' . $row['price'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No product found</p>";
        }
  ?>
    </div>
</div>