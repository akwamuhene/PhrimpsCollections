<?php include('session.php'); ?>
<html>
  <head>
    <meta charset="utf-8"><meta http-equiv="content-language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel 1</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-html5-1.5.6/r-2.2.2/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../images/fcx-small.png">  
  </head>
  <body>
            <!-- Image and text -->
            <nav class="navbar navbar-light bg-dark">
              <a class="navbar-brand text-white" href="#">
                PHRIMPS COLL. ADMIN PANEL
              </a>
            </nav>
            <br>
            <div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger text-white remove_id" ><span class = "fa fa-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "fa fa-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "logout" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to sign out?</label></center>
							<br />
							<center><a href="../db/logout.php" class = "btn btn-danger text-white" ><span class = "fa fa-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "fa fa-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
            <div class = "modal fade" id = "edit_item" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit Item</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "done_sales" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div id = "done_query"></div>
					</div>
				</div>
			</div>
			<div class="container">
			<div class="row">
              <div class="col-md-3 col-sm-12 bg-dark">
                <div class="card">
                  <img src="../img/admin.png" class="card-img-top" alt="Admin">
                  <div class="card-body bg-dark text-white">
                    <h5 class="card-title text-center"><?php echo $user; ?></h5>
                  </div>
                  <!-- Nav tabs -->
                    <ul class="nav flex-column nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-list-alt"></i>  Inventory Report</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-clock-o"></i> Pending Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false"><i class="fa fa-check-circle"></i> Successful Sales</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><i class="fa fa-exclamation-triangle"></i> Coming Soon</a>
                      </li>
                    </ul>
                    </div>
                    <div class="card-body">
                    <a href="#" class="card-link btn btn-primary"><i class="fa fa-cog"></i></a>
                    <a href="#" class="card-link btn btn-danger"  data-toggle = "modal" data-target = "#logout"><i class="fa fa-sign-out"></i></a>
                  </div>
              </div>
              <div class="col-md-9 col-sm-12 bg-light">
                  <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
                  <button type="button" class="btn btn-success pull-right" data-toggle = "modal" data-target = "#add_item"><i class="fa fa-plus"></i> Add New Item</button>
              <br><br>
              <table id="inventory" class="table table-responsive table-striped display" style="width:100%">
					<thead>
						<tr>
							<th>Item Name</th>
							<th>image</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Category</th>
							<th>Promo</th>
							<th>Date</th>
							<th>Action</th>	
						</tr>
					</thead>
					<tbody>
					    <?php
							$q_item = $conn->query("SELECT * FROM `cart` ORDER BY promo desc") or die(mysqli_error());
							while($f_item = $q_item->fetch_array()){
						?>
						<tr>
							<td><?php echo $f_item['item_name']; ?></td>
							<td><img src="<?php if (empty($f_item['image'])){echo "../img/noimage.png";}else{echo "../img/".$f_item['image'];} ?>" class="rounded-circle tb-img" alt="item image"></td>
							<td>₵<?php echo $f_item['price']; ?></td>
							<td><?php echo $f_item['qty']; ?></td>
							<td><?php echo $f_item['category']; ?></td>
							<td><?php echo $f_item['promo']; ?></td>
							<td><?php echo $f_item['rec_time']; ?></td>
							<td class="row" style="color:white;">
							    <a class = "btn btn-warning  eitem_id" name = "<?php echo $f_item['item_id']?>" href = "#" data-toggle = "modal" data-target = "#edit_item"><span class = "fa fa-edit"></span></a>&nbsp;&nbsp;
                                <a class = "btn btn-danger ritem_id" name = "<?php echo $f_item['item_id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "fa fa-trash"></span></a>
                            </td>
						</tr>
						<?php
                          }
                          ?>
					</tbody>
				</table>    
                  </div>
                  
                  
                  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <br>
                      <span class="alert alert-warning"><i class="fa fa-clock-o"></i> Pending Orders</span>
                      <br><br>
              <table id="pending" class="table table-striped table-responsive display" style="width:100%">
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th>City</th>
							<th>Region</th>
							<th>Order(s)</th>
							<th>Payment</th>
							<th>Time</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    <?php
							$q_pending = $conn->query("SELECT * FROM `pending` order by penid desc") or die(mysqli_error());
							while($f_pending = $q_pending->fetch_array()){
						?>
						<tr>
							<td><?php echo $f_pending['fname']; ?></td>
							<td><?php echo $f_pending['email']; ?></td>
							<td><?php echo $f_pending['phone']; ?></td>
							<td><?php echo $f_pending['address']; ?></td>
							<td><?php echo $f_pending['city']; ?></td>
							<td><?php echo $f_pending['region']; ?></td>
							<td><?php echo $f_pending['orderconfirm']; ?></td>
							<td><?php echo $f_pending['payment']; ?></td>
							<td><?php echo $f_pending['rec_time']; ?></td>
							<td class="row" style="color:white;">
                                <a class = "btn btn-success ditem_id" name = "<?php echo $f_pending['penid']?>" href = "#" data-toggle = "modal" data-target = "#done_sales"><span class = "fa fa-check"> Done</span></a>
                            </td>
						</tr>
						<?php
                          }
                          ?>
					</tbody>
				</table>  
                  </div>
                  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                      <br>
                      <span class="alert alert-success"><i class="fa fa-shopping-bag"></i> Successful Sales</span>
                      <br><br>
              <table id="sales" class="table table-striped table-responsive display" style="width:100%">
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th>City</th>
							<th>Region</th>
							<th>Order(s)</th>
							<th>Payment</th>
							<th>Start Date</th>
							<th>Completed Date</th>
						</tr>
					</thead>
					<tbody>
					    <?php
							$q_sales = $conn->query("SELECT * FROM `sales` order by sid desc") or die(mysqli_error());
							while($f_sales = $q_sales->fetch_array()){
						?>
						<tr>
							<td><?php echo $f_sales['fname']; ?></td>
							<td><?php echo $f_sales['email']; ?></td>
							<td><?php echo $f_sales['phone']; ?></td>
							<td><?php echo $f_sales['address']; ?></td>
							<td><?php echo $f_sales['city']; ?></td>
							<td><?php echo $f_sales['region']; ?></td>
							<td><?php echo $f_sales['orderconfirm']; ?></td>
							<td><?php echo $f_sales['payment']; ?></td>
							<td><?php echo $f_sales['starttime']; ?></td>
							<td><?php echo $f_sales['completetime']; ?></td>
						</tr>
						<?php
                          }
                          ?>
					</tbody>
				</table>  
                  </div>
                  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
                </div>
              </div>
            </div>
            </div>
            <div class = "modal fade" id = "add_item" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content container">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Add new item</h4>
						</div>
						<form method="POST" action="save.php" enctype="multipart/form-data">
							<div class = "form-group">
                    			<label>Item Name</label>
                    			<input type = "text" name = "itemname" class = "form-control" />
                    		</div>
                    		<div class = "form-group">
                    			<label>Price</label>
                    			<input type = "number" name = "price" class = "form-control" />
                    		</div>
                    		<div class = "form-group">
                    			<label>Price(decimals)</label>
                    			<input type = "number" name = "decml" class = "form-control" />
                    		</div>
                    		<div class = "form-group">
                    			<label>Discount %</label>
                    			<input type = "number" name = "disc" class = "form-control" />
                    		</div>
                    		<div class = "form-group">
                    			<label>Phone</label>
                    			<input type = "number" name = "qty" class = "form-control" />
                    		</div>
                    		<div class="form-group">
                              <label>Category</label>
                              <select class="custom-select" name="category" required>
                                <option disabled>Choose...</option>
                                <option value="Bags">Bags & Shoes</option>
                                <option value="Watch & Jewelry">Watch & Jewelry</option>
                                <option value="Hair">Hair & Beauty</option>
                                <option value="Clothing">Clothing</option>
                              </select>
                            </div>
                    		<div class = "form-group">
                    			<label>Company Name</label>
                    			<input type = "text" name = "datades" class = "form-control" />
                    		</div>
                    		<div class = "form-group">
                    			<label>Promotion</label>
                    			<input type = "number" name = "promo" class = "form-control" />
                    		</div>
                    		<div class = "form-group">
                    			<label>Upload Item Photo</label>
                    			<input type = "file" name = "myfile" class = "form-control" required />
                    		</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "fa fa-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
          </div>
        </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-html5-1.5.6/r-2.2.2/datatables.min.js"></script>
  <script>
           $(document).ready(function() {
            $('#inventory').DataTable();
           });
           $(document).ready(function() {
            $('#pending').DataTable();
           });
           $(document).ready(function() {
            $('#sales').DataTable();
           });
    </script>
    <script type = "text/javascript">
		$(document).ready(function(){
	$(document).on("click", ".ritem_id", function(){
		$item_id = $(this).attr('name');
		$('.remove_id').click(function(){
			window.location = 'delete.php?item_id=' + $item_id;
		});
	});
	$(document).on("click", ".eitem_id", function(){
		$item_id = $(this).attr('name');
		$('#edit_query').load('load_edit_item.php?item_id=' + $item_id);
	});
	$(document).on("click", ".ditem_id", function(){
		$penid = $(this).attr('name');
		$('#done_query').load('load_done_sales.php?penid=' + $penid);
	});
});
	</script>
  </body>
</html>
