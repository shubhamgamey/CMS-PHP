<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/adminHeader.php';

?>

<body>
    <div id="wrapper">
        <?php
        include 'includes/adminNavigation.php';
        include 'includes/adminSidebar.php';
        $cat_prefill = '';
        $result = delete_category();
        $cat_prefill = get_category_byid();
        update_category();
        $insert_response =  insert_category();
        ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>

                        <?php

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        } else {
                            $source = '';
                        }
                        switch ($source) {
                            case 'viewall':
                                include 'posts_table.php';
                                break;
                            case 'addpost':
                                include 'add_post.php';
                                break;

                            default:
                                # code...
                                break;
                        }

                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>