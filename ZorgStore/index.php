<?php include 'navigation.php';?>
<body>

<div class="container fb-jb">
	<div class = "panel panel-primary">
		<h1>Featured Books</h1>
		</div>
	</div>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <a href="product.php?id=123" title =""><img src="productsample.jpg" class="img-responsive" style="width:50%" alt="Image"></a>
    </div>
    <div class="col-sm-4"> 
      <a href="product.php?id=456" title =""><img src="productsample.jpg" class="img-responsive" style="width:50%" alt="Image"></a>
    </div>
    <div class="col-sm-4"> 
      <a href="product.php?id=789" title =""><img src="productsample.jpg" class="img-responsive" style="width:50%" alt="Image"></a>
    </div>
  </div>

<div class="row">
  <div class="genre-container">
	<div class="genre-item"><a href="genre.php?id=123" class="genre-text">Fiction</a></div>
	<div class="genre-item"><a href="genre.php?id=456" class="genre-text">Kitties</a></div>
	<div class="genre-item"><a href="genre.php?id=789" class="genre-text">Nonfiction</a></div>
	<div class="genre-item"><a href="genre.php?id=987" class="genre-text">Cooking</a></div>
	<div class="genre-item"><a href="genre.php?id=654" class="genre-text">Other</a></div>
  </div>
</div>
  
</div>


<?php include 'footer.php';?>

</body>
</html>
