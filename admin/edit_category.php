<?php include 'includes/header.php'; ?>
<?php
  $id = $_GET['id'];

  //Create DB Object
  $db = new Database();

  //create Query
  $query = "SELECT *FROM categories WHERE id =".$id;

  //Run Query
  $category = $db->select($query)->fetch_assoc();

  //create Query
  $query = "SELECT *FROM categories";

  //Run Query
  $categories = $db->select($query);
?>


<form role="form" method="post" action="edit_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $category['name']; ?>">
  </div>

  <div>  
	<input name="submit" type="submit" class="btn btn-default" value="Submit"/>
	  <a href="index.php" class="btn btn-default">Cancel</a>
    <input name="delete" type="submit" class="btn btn-danger" value="Delete"/>
  </div>
  <br>
</form>

<?php include 'includes/footer.php'; ?>