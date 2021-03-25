<?php
	require_once '../db/conn.php';
if(ISSET($_POST['edit'])){
		$item_name = $_POST['item_name'];
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
				    $conn->query("UPDATE `cart` SET `image` = '$url' WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());

		echo '
			<script type = "text/javascript">
				alert("Item edited successfully");
				window.location = "index.php";
			</script>
		';
				    
				    }}

			
			}   
?>

