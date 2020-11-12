<?php require_once('config.php'); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<input type="text" name="ptitle" class="form-control" placeholder="Product Title" required/>
					<input type="number" name="price" placeholder="Price" class="form-control" required/>
					<select name="pcategory" class="form-control">
						<option value="1">Category 1</option>
						<option value="2">Category 2</option>
						<option value="3">Category 3</option>
					</select>
					<textarea name="pdes" id="" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
					<button type="submit" name="pcreate" class="btn btn-md btn-outline-danger">Create Product</button>
				</form>
			</div>
		</div>
	</div>
	
	
	<?php
		if(isset($_POST['pcreate'])){
			$ptitle = $_POST['ptitle'];
			$price = $_POST['price'];
			$pcategory = $_POST['pcategory'];
			$pdes = $_POST['pdes'];
			$pstock = 1;
			
			if($pcategory == 1){
				$pcategory = 'Category 1';
			}elseif($pcategory == 2){
				$pcategory = 'Category 2';
			}else{
				$pcategory = 'Category 3';
			}
			
			$insert = "INSERT INTO products(p_title, p_des, p_price, p_stock, p_category) values ('$ptitle','$pdes','$price','$pstock', '$pcategory')";
			
			$create = mysqli_query( $con, $insert );
			
			if($create){
				echo '<script type="text/javascript">alert("Product Added")</script>';
			}else{
				echo '<script type="text/javascript">alert("Error!!! Please check your data")</script>';
			}
		}
		
	?>
	<table class="table table-bordered table-dark">
		<tr>
			<th>Product ID</th>
			<th>Title</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Category</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		
		<?php
			$show = "SELECT*FROM products";
			$result = mysqli_query( $con, $show );
			if(mysqli_num_rows($result) > 0){
				while($product = mysqli_fetch_assoc($result)){
					
					echo '
					<tr>
						<td>'.$product['p_id'].'</td>
						<td>'.$product['p_title'].'</td>
						<td>'.$product['p_price'].'</td>
						<td>'.$product['p_stock'].'</td>
						<td>'.$product['p_category'].'</td>
						<td>'.$product['p_des'].'</td>
						<td><a href="http://localhost/E-commerce/update.php?editproduct='.$product['p_id'].'" class="btn btn-outline-primary">Edit</a>&nbsp;<a href="" class="btn btn-outline-danger">Delete</a>&nbsp;<a href="" class="btn btn-outline-success">View</a></td>
					</tr>
					';
				}
			}else{
				echo '
				
					<tr>
						<td colspan="6" class="text-center">No Product Found</td>
					</tr>
				';
			}
		?>
		
	</table>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>