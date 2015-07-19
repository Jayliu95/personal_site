<?php include 'includes/header.php'; ?>
<?php
  //Create DB Object
  $db = new Database();

  //Check URL For Category
  if(isset($_GET['category'])){
    $category = $_GET['category'];
     //create Query
    $query = "SELECT * FROM post WHERE category = ".$category;
    //Run Query
    $posts = $db->select($query);
  } else {
    //create Query
    $query = "SELECT *FROM post";
    //Run Query
    $posts = $db->select($query);
  }

  //create Query
  $query = "SELECT *FROM categories";

  //Run Query
  $categories = $db->select($query);
?>
<?php if($posts): ?>
  <?php while($row = $posts->fetch_assoc()): ?>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']?></a></p>
            <?php echo shortenText($row['body']);?>
            <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>" ?>Read More</a>
          </div><!-- /.blog-post -->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>
  <?php endwhile; ?>        
  <?php else: ?>
    <p>We don't have any posts yet! </p>
  <?php endif; ?>  
<?php include 'includes/footer.php'; ?>