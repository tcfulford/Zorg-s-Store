<?php include 'navigation.php';?>
<?php $id = $_GET['id'];
	  $sql = "SELECT title,price, short_description FROM books WHERE book_id='$id'";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
?>

<body>

<div class="container">
<div class="container-jb">    
  <div class="row-jb">
     <div class ="left-main">
		<img src="productsample.jpg" width="260" height="390">
	 </div>
	 <div class ="right-main">
		<h2><?php echo $row["title"]?></h2>
		<p><?php echo $row["short_description"]?></p>
		<p><?php echo "$" . $row["price"]?></p>
		<a href="#" class = "btn btn-basic jbbutton">Add to cart </a>
	 </div>
   </div>
</div>
</div>

<?php include 'footer.php';?>
</body>
</html>
