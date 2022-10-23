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
                Tech Blogs
                <small>Frontend</small>
            </h1>
            <?php
            global $connection;
            $query = 'SELECT * FROM posts';
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
            ?>
            <?php
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