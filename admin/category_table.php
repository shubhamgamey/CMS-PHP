<div class="col-lg-6">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Category</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $res_categories = fetch_categories();
            if ($res_categories) {
                while ($row = mysqli_fetch_assoc($res_categories)) {
            ?>
                    <tr>
                        <th scope="row"><?php echo $row["cat_id"] ?></th>
                        <td><?php echo $row["cat_title"] ?></td>
                        <td>
                            <a type="btn btn-link" class="close" aria-label="Close" role="button" href='categories.php?id=<?php echo $row['cat_id'] ?>'>&times;
                            </a>
                        </td>
                        <td>
                            <a type="btn btn-link" class="close" aria-label="Close" role="button" href='categories.php?update=<?php echo $row['cat_id'] ?>'>&#9998;
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>