  <!-- <?php
        if (isset($_POST['submit']) && $_POST['search']) {
            $term = $_POST['search'];
            global $connection;
            echo $term;
            $query = "SELECT * FROM posts WHERE post_title LIKE '%$term%'";
            echo $query;
            $res = mysqli_fetch_assoc(mysqli_query($connection, $query));
            print_r($res);
        }
        ?> -->

  <!-- Blog Sidebar Widgets Column -->
  <div class="col-md-4">

      <!-- Blog Search Well -->
      <div class="well">
          <h4>Blog Search</h4>
          <form action="search.php" method="post">
              <div class="input-group">
                  <input type="text" name="search" class="form-control">
                  <span class="input-group-btn">
                      <button name="submit" class="btn btn-default" type="submit">
                          <span class="glyphicon glyphicon-search"></span>
                      </button>
                  </span>
              </div>
          </form>
          <!-- /.input-group -->
      </div>

      <div class="well">
          <h4>Blog Categories</h4>
          <div class="row">
              <div class="col-lg-6">
                  <ul class="list-unstyled">
                      <?php
                        $query = 'SELECT * FROM categories';
                        $res = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                          <li><a href="search.php?<?php echo $row['cat_title'] ?>"><?php echo $row['cat_title'] ?></a>
                          </li>
                      <?php
                        }
                        ?>
                  </ul>
              </div>
          </div>
      </div>
  </div>