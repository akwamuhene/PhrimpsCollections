<?php
	require_once '../db/conn.php';
	$q_edit_item = $conn->query("SELECT * FROM `cart` WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());
	$f_edit_item = $q_edit_item->fetch_array();
?>
<div class  = "modal-body">
    <div class = "form-group">
        <form method = "POST" action = "changeimage.php?item_id=<?php echo $f_edit_item['item_id']?>" enctype = "multipart/form-data">
			<label>Upload item Photo</label>
			<input type = "text" name = "item_name" value = "<?php echo $f_edit_item['item_name']?>" class = "form-control" hidden />
			<input type = "file" name = "myfile" value = "<?php echo $f_edit_item['image']?>" class = "form-control" required/>
			<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit"><span class = "fa fa-edit"></span> Save Changes</button>
	</div>
</form>
		</div>
<form method = "POST" action = "edit_item_query.php?item_id=<?php echo $f_edit_item['item_id']?>" enctype = "multipart/form-data">
		<div class = "form-group">
			<label>Item Name</label>
			<input type = "text" name = "item_name" value = "<?php echo $f_edit_item['item_name']?>" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Price</label>
			<input type = "number" name = "price" value = "<?php echo $f_edit_item['price']?>" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Price</label>
			<input type = "number" name = "decml" value = "<?php echo $f_edit_item['decml']?>" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Price</label>
			<input type = "number" name = "disc" value = "<?php echo $f_edit_item['disc']?>" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Quatity</label>
			<input type = "number" name = "qty" value = "<?php echo $f_edit_item['qty']?>" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>machine name</label>
			<input type = "text" name = "data_des" value = "<?php echo $f_edit_item['data_des']?>" class = "form-control" />
		</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit"><span class = "fa fa-edit"></span> Save Changes</button>
	</div>
</form>	