<?php include 'includes/header.php'; ?>
<?php
  $id = $_GET['id'];

  //Create DB Object
  $db = new Database();

  //create Query
  $query = "SELECT *FROM post WHERE id =".$id;

  //Run Query
  $post = $db->select($query)->fetch_assoc();

  //create Query
  $query = "SELECT *FROM categories";

  //Run Query
  $categories = $db->select($query);
?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post['title']?></h2>
            <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> By:<a href="#"> <?php echo $post['author']?></a></p>
            <?php echo $post['body'];?>
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>
        </div><!-- /.blog-post -->



<?php include 'includes/footer.php'; ?>