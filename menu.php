<?php 
    include_once("config/database.php");
?>

<nav>
    <div id="menu" class="collapse navbar-collapse">
        <?php 
            $sqlCategory = "SELECT * FROM category ORDER BY cat_id ASC";
            $queryCategory = mysqli_query($conn, $sqlCategory);
        ?>
        <ul>
            <?php 
                if (mysqli_num_rows($queryCategory)) {
                    while ($cate = mysqli_fetch_assoc($queryCategory)) {
            ?>
                <li class="menu-item"><a href="category-product.php?cat_id=<?php echo $cate['cat_id']; ?>"><?php echo $cate['cat_name']; ?></a></li>
            <?php 
                    }
                }
            ?>
        </ul>
    </div>
</nav>