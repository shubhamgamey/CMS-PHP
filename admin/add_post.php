
<?php
   if(isset($_POST['create_post'])) {
            $post_title        = $_POST['title'];
            $post_user         = $_POST['author'];
            $post_category_id  = $_POST['post_category'];
            $post_status       = $_POST['post_status'];
    
            $post_image        = 'https://loremflickr.com/640/360';
    
    
            $post_tags         = $_POST['post_tags'];
            $post_content      = $_POST['post_content'];
            $post_date         = date('d-m-y');
      $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date,post_image,post_content,post_tags,post_comment_count, post_status) ";
             
      $query .= "VALUES({$post_category_id},'{$post_title}','{$post_user}',now(),'{$post_image}','{$post_content}','{$post_tags}', 2,'{$post_status}') "; 
             
      $create_post_query = mysqli_query($connection, $query);  
          
      $the_post_id = mysqli_insert_id($connection);


      echo "<p class='bg-success'>Post Created. <a href='../'>View Post </a> or <a href='posts.php'>Edit More Posts</a></p>";
   }
?>

    <form action="" method="post" enctype="multipart/form-data">    
     
     
      <div class="form-group">
         <label for="title">Post Title</label>
          <input type="text" class="form-control" name="title">
      </div>

         <div class="form-group">
       <label for="category">Category : </label>
       <select name="post_category" id="">
           
<?php

        $query = "SELECT * FROM categories";
        $select_categories = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_categories )) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
            echo "<option value='$cat_id'>{$cat_title}</option>";
        }
?>
       </select>
      </div>

 <div class="form-group">
         <label for="title">Post Author</label>
          <input type="text" class="form-control" name="author">
      </div>
      
      

       <div class="form-group">
       <label for="title">Post Status : </label>
         <select name="post_status" id="">
             <option value="draft">Select Status</option>
             <option value="published">Published</option>
             <option value="draft">Draft</option>
         </select>
      </div>
      
      <div class="form-group">
         <label for="post_tags">Post Tags</label>
          <input type="text" class="form-control" name="post_tags">
      </div>
      
      <div class="form-group">
         <label for="post_content">Post Content</label>
         <textarea class="form-control "name="post_content" id="" cols="30" rows="10">
         </textarea>
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
      </div>


</form>
    