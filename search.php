<?php
include 'includes/header.php';
include 'includes/navigation.php';
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="page-header">
                <small>Search Results</small>
            </h1>
            <?php
            global $connection;
            $CurPageURL = $_SERVER['QUERY_STRING'];
            if ((isset($_POST['submit']) && $_POST['search']) || $CurPageURL) {
                if (isset($_POST['search'])) {
                    $term = $_POST['search'];
                } else {
                    $term = $CurPageURL;
                }
                global $connection;
                $query = "SELECT * FROM posts WHERE post_title LIKE '%$term%'";
                $res = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($res)) {
            ?>
                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo ($row['post_title']) ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo ($row['post_author']) ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo ($row['post_date']) ?></p>
                    <hr>
                    <img class="img-responsive" src='https://loremflickr.com/640/360' alt="">
                    <hr>
                    <p><?php echo ($row['post_content']) ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>
            <?php
                }
            }
            include 'includes/pager.php';
            ?>
        </div>
        <?php
        include 'includes/sidebar.php';
        ?>
    </div>
    <hr>
    <?php
    include 'includes/footer.php'
    ?>
</div>