<?php
include 'includes/db.php';
include 'includes/functions.php';
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">Tech Blog</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                global $connection;
                $query = "SELECT * FROM categories ";
                $categories = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($categories)) {
                    $cat_title = $row['cat_title'];
                    echo "<li><a href='search.php?$cat_title'>$cat_title</a></li>";
                }
                ?>
                <li><a href='admin'>Admin</a></li>
            </ul>
        </div>
    </div>
</nav>