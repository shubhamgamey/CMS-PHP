<?php

function fetch_categories()
{
    global $connection;
    $query = 'SELECT * FROM categories';
    $res_categories = mysqli_query($connection, $query);
    return $res_categories;
}


function insert_category()
{
    global $connection;
    if (isset($_POST['submit']) && $_POST['category']) {

        $cat = $_POST['category'];

        $sql = "INSERT INTO categories (cat_title)\n"
            . "SELECT * FROM (SELECT '{$cat}' AS cat_title) AS tmp\n"
            . "WHERE NOT EXISTS (\n"
            . "    SELECT cat_title FROM categories WHERE cat_title = '{$cat}'\n"
            . ") LIMIT 1;";

        $res_insert = mysqli_query($connection, $sql);
        if ($res_insert) {
            header('Location:categories.php');
            return 'Category Added';
        }
    } else {
        if (isset($_POST['submit']) && ($_POST['category'] == '' || empty($_POST['category']))) {
            return 'Please enter category';
        }
    }
}

function update_category()
{
    global $connection;
    if (isset($_POST['submit_update']) && $_POST['category'] && isset($_GET['update'])) {
        $update_id = $_GET['update'];
        $updated_cat = $_POST['category'];
        $update_query = "UPDATE categories SET cat_title = '$updated_cat' WHERE cat_id = $update_id";
        $update = mysqli_query($connection, $update_query);
        if ($update) {
            $result = 'Category Updated';
            header('Location:categories.php');
        }
    }
}


function delete_category()
{
    global $connection;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM categories WHERE cat_id = {$id}";
        $res_delete = mysqli_query($connection, $query);
        if ($res_delete) {

            header('Location:categories.php');
            return 'Category Deleted';
        }
    };
}

function get_category_byid()
{
    global $connection;
    if (isset($_GET['update'])) {
        $update_id = $_GET['update'];
        $get_cat_query = "SELECT * FROM categories WHERE cat_id = '$update_id'";
        $get_cat = mysqli_query($connection, $get_cat_query);
        return mysqli_fetch_assoc($get_cat)['cat_title'];
    }
}



