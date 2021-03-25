<?php
	include('../db/conn.php');
	
	$item_name=$_POST['itemname'];
	$data_des=$_POST['datades'];
	$price=$_POST['price'];
	$decml=$_POST['decml'];
	$disc=$_POST['disc'];
	$qty=$_POST['qty'];
	$promo=$_POST['promo'];
	$category=$_POST['category'];
	
		$output_dir = "../img/";
		$allowedExts = array("jpg", "jpeg", "gif", "png","JPG","PNG");
		$extension = @end(explode(".", $_FILES["myfile"]["name"]));

		    //Filter the file types , if you want.
		    if ((($_FILES["myfile"]["type"] == "image/gif")
			    || ($_FILES["myfile"]["type"] == "image/jpeg")
			    || ($_FILES["myfile"]["type"] == "image/JPG")
			    || ($_FILES["myfile"]["type"] == "image/PNG")
			    || ($_FILES["myfile"]["type"] == "image/png")
			    || ($_FILES["myfile"]["type"] == "image/pjpeg"))
			    && ($_FILES["myfile"]["size"] < 5048000000)
			    && in_array($extension, $allowedExts)) 
		    {
			      if ($_FILES["myfile"]["error"] > 0)
				    {
				    echo "Return Code: " . $_FILES["myfile"]["error"] . "<br>";
				    }
			    if (file_exists($output_dir. $_FILES["myfile"]["name"]))
			      {
			      unlink($output_dir. $_FILES["myfile"]["name"]);
			      }	
				    else
				    {
				    $pic=$_FILES["myfile"]["name"];
				    $conv=explode(".",$pic);
				    $ext=$conv['1'];	
					    
				    //move the uploaded file to uploads folder;
			          move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$item_name.".".$ext);
				    
				    $pics=$output_dir.$item_name.".".$ext;
				  
				      
				    $url=$item_name.".".$ext;

	
	mysqli_query($conn,"insert into cart (item_name, price, decml, disc, qty, category, data_des, image, promo, rec_time) values ('$item_name','$price', '$decml','$disc', '$qty','$category','$data_des','$url', $promo, NOW())");
	?>
		<script>
			window.alert('Item added successfully!');
			window.location = "index.php";
		</script>
		<?php
				    }}
		?>