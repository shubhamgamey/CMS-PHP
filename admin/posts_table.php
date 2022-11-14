<div class="col-lg-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th scope="col">Tags</th>
                <th scope="col">Comments</th>
                <th scope="col">Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $posts = fetch_posts();
            if ($posts) {
                while ($row = mysqli_fetch_assoc($posts)) {
            ?>
                    <tr>
                        <th scope="row"><?php echo $row["post_id"] ?></th>
                        <td><?php echo $row["post_author"] ?></td>
                        <td><?php echo $row["post_title"] ?></td>
                        <td><?php echo $row["post_category_id"] ?></td>
                        <td><?php echo $row["post_status"] ?></td>
                        <td><img width='150'src='<?php echo $row["post_image"] ?>' /></td>
                        <td><?php echo $row["post_tags"] ?></td>
                        <td><?php echo $row["post_comment_count"] ?></td>
                        <td><?php echo $row["post_date"] ?></td>
                    </tr>
            <?php
                }
            }

            ?>


        </tbody>
    </table>

</div>