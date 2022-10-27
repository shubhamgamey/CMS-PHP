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
                        <div class="col-lg-6">
                            <form action="" method="post">
                                <div class="form-group col-md-6">
                                    <label for="cat_title">Category Title : </label>
                                    <input class="form-control" type="text" name="category" id="cat_title" value='<?php echo $cat_prefill ?>'>
                                </div>
                                <div class="form-group  col-md-12">
                                    <input type="submit" class='btn btn-primary' name='submit' value="Add Category" />
                                    <input type="submit" class='btn btn-primary' name='submit_update' value="Update Category" />
                                    <p><?php echo $insert_response ?></p>
                                </div>

                            </form>
                        </div>
                        <?php include 'category_table.php' ?>
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