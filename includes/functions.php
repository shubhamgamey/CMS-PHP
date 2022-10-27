
<?php
function fetch_posts()
{
    global $connection;
    $query = 'SELECT * FROM posts';
    return  mysqli_query($connection, $query);
}
?>