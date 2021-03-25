<?php include('db/conn.php'); ?>
<!Doctype html>
<html>
<head>
	<title>Phrimps Collections</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="Online Shopping for men, women, children, clothes, Fashion &amp; more | Phrimps Collections Ghana" />
	<meta name="robots" content="index, follow" />
	<meta name="description" content="Phrimps Collections is Ghana's No.1 Online Shopping Mall for women ➜Shop clothing, phones, books, fashion &amp; more online ✔ Huge selection ✔ Top brands ✓ Best prices in Ghana ✓ Order now and enjoy pay on delivery!" />
	<meta content="Beads, bags, watches etc" name="Phrimps Collections">
	<meta name="keywords" content="Phrimps Collections Ghana, Online shopping, watches, Apparel, Shoes, Bags, Jewelry, Watch, Jewelry, Electronics, Hair, Fashion"> 
	<meta name="description" content="Phrimps Collections Ghana online shopping from African biggest selection of Phones, Apparel, Shoes, Bags, Jewelry, Watch, Jewelry, Electronics, Hair, Fashion and more"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/solid.css">
    <link rel="stylesheet" href="css/regular.css">
    <link rel="stylesheet" href="css/brands.css">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <link rel="icon" type="image/png" href="images/fcx-small.png">
    <script data-ad-client="ca-pub-4029054974367638" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light fixed-top text-center" style="background: #E0E0E0;">
  <div class="col-12"><span class="navbar-brand mb-3 h1"><h4 class="font brand-name">PHRIMPS COLLECTIONS</h4></span></div>
</nav>
<div class="col-12"><div class="container text-center" style="padding-top:8%;"><h4 class="sm">Available Items <span class="badge badge-danger">New</span></h4></div></div>
<div class="col-lg-12 nav-t">
<ul id="myTab" class="nav clearfix text-center" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bags-tab" data-toggle="tab" href="#bags" role="tab" aria-controls="bags" aria-selected="true">Bags & Shoes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="wandj-tab" data-toggle="tab" href="#wandj" role="tab" aria-controls="wandj" aria-selected="false">Watch & Jewelry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="phnsacc-tab" data-toggle="tab" href="#phnsacc" role="tab" aria-controls="phnsacc" aria-selected="false">Phones & Accessories</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="hair-tab" data-toggle="tab" href="#hair" role="tab" aria-controls="hair" aria-selected="false">Hair & Beauty</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="clothing-tab" data-toggle="tab" href="#clothing" role="tab" aria-controls="clothing" aria-selected="false">Clothing</a>
  </li>
</ul>
</div>
<br><br>
<div class="col-12">
    <div class="search">
     <input  class="search-txt" type="text" name="" placeholder="Type to search">
     
     <a class="search-btn" href="#" >
        <i class="fas fa-search"></i>
     </a>
    

 
    </div>
</div>
<br><br>	
	

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
      <div class="col-lg-12 col-sm-12">
    	<div class="container">
    	<div class="row items">
            <?php
    			$q_item = $conn->query("SELECT * FROM `cart` order by promo desc") or die(mysqli_error());
    			while($f_item = $q_item->fetch_array()){
    		?>
    		<div data-search="<?php echo $f_item['item_name']; ?>" class="col-lg-4 col-md-4 col-sm-6">
    			<div class="card">
    			    <div class="ribbon">
                      <span>-<?php echo $f_item['disc']; ?>%</span>
                    </div>
    			  <img src="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>" class="zoom card-img-top" alt="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>">
    			  <span class="shopname">@<?php echo $f_item['data_des']; ?></span>
    			  <div class="card-body text-center">
    			    <h3><span class="price badge badge-warning"></span></h3>
    			    <p class="price">₵<?php echo $f_item['price']; ?><sup>.<?php echo sprintf("%02s", $f_item['decml']) ?></sup></p>
    			    <p class="ititle"><?php echo $f_item['item_name']; ?></p>
    			    <a href="https://api.whatsapp.com/send?phone=+<?php echo $f_item['qty']; ?> &text=Hello <?php echo $f_item['data_des']; ?>, I'm interested in *<?php echo $f_item['item_name']; ?>*, Price: *₵<?php echo $f_item['price']; ?>.<?php echo sprintf("%02s", $f_item['decml']) ?>*. &copy;phrimpscollections.com" class="fa-lg add-to-cart button" target="_blank"><i class="fab fa-whatsapp"></i> Shop Now <i class="fab fa-android"></i> <i class="fab fa-windows"></i></a>
    			    <a href="tel:+<?php echo $f_item['qty']; ?>" class="btn btn-primary"><i class="fas fa-mobile-alt"></i> Call <i class="fab fa-android"></i> <i class="fab fa-apple"></i></a>
    			  </div>
    			</div>
    		</div>
    		<?php
              }
              ?>
    	</div>
    	</div>
      </div>
  </div>
  <div class="tab-pane fade" id="bags" role="tabpanel" aria-labelledby="bags-tab">
      <div class="col-lg-12 col-sm-12">
    	<div class="container">
    	<div class="row">
            <?php
    			$q_item = $conn->query("SELECT * FROM `cart` WHERE category='Bags' order by promo desc") or die(mysqli_error());
    			while($f_item = $q_item->fetch_array()){
    		?>
    		<div data-search="<?php echo $f_item['item_name']; ?>" class="col-lg-4 col-md-4 col-sm-6">
    			<div class="card">
    			    <div class="ribbon">
                      <span>-<?php echo $f_item['disc']; ?>%</span>
                    </div>
    			  <img src="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>" class="zoom card-img-top" alt="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>">
    			  <span class="shopname">@<?php echo $f_item['data_des']; ?></span>
    			  <div class="card-body text-center">
    			    <h3><span class="price badge badge-warning"></span></h3>
    			    <p class="price">₵<?php echo $f_item['price']; ?><sup>.<?php echo sprintf("%02s", $f_item['decml']) ?></sup></p>
    			    <p class="ititle"><?php echo $f_item['item_name']; ?></p>
    			    <a href="https://api.whatsapp.com/send?phone=+<?php echo $f_item['qty']; ?> &text=Hello <?php echo $f_item['data_des']; ?>, I'm interested in *<?php echo $f_item['item_name']; ?>*, Price: *₵<?php echo $f_item['price']; ?>.<?php echo sprintf("%02s", $f_item['decml']) ?>*. &copy;phrimpscollections.com" class="fa-lg add-to-cart button" target="_blank"><i class="fab fa-whatsapp"></i> Shop Now <i class="fab fa-android"></i> <i class="fab fa-windows"></i></a>
    			    <a href="tel:+<?php echo $f_item['qty']; ?>" class="btn btn-primary"><i class="fas fa-mobile-alt"></i> Call <i class="fab fa-android"></i> <i class="fab fa-apple"></i></a>
    			  </div>
    			</div>
    		</div>
    		<?php
              }
              ?>
    	</div>
    	</div>
      </div>
  </div>
  <div class="tab-pane fade" id="wandj" role="tabpanel" aria-labelledby="wandj-tab">
      <div class="col-lg-12 col-sm-12">
    	<div class="container">
    	<div class="row">
            <?php
    			$q_item = $conn->query("SELECT * FROM `cart` WHERE category='Watch & Jewelry' order by promo desc") or die(mysqli_error());
    			while($f_item = $q_item->fetch_array()){
    		?>
    		<div data-search="<?php echo $f_item['item_name']; ?>" class="col-lg-4 col-md-4 col-sm-6">
    			<div class="card">
    			    <div class="ribbon">
                      <span>-<?php echo $f_item['disc']; ?>%</span>
                    </div>
    			  <img src="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>" class="zoom card-img-top" alt="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>">
    			  <span class="shopname">@<?php echo $f_item['data_des']; ?></span>
    			  <div class="card-body text-center">
    			    <h3><span class="price badge badge-warning"></span></h3>
    			    <p class="price">₵<?php echo $f_item['price']; ?><sup>.<?php echo sprintf("%02s", $f_item['decml']) ?></sup></p>
    			    <p class="ititle"><?php echo $f_item['item_name']; ?></p>
    			    <a href="https://api.whatsapp.com/send?phone=+<?php echo $f_item['qty']; ?> &text=Hello <?php echo $f_item['data_des']; ?>, I'm interested in *<?php echo $f_item['item_name']; ?>*, Price: *₵<?php echo $f_item['price']; ?>.<?php echo sprintf("%02s", $f_item['decml']) ?>*. &copy;phrimpscollections.com" class="fa-lg add-to-cart button" target="_blank"><i class="fab fa-whatsapp"></i> Shop Now <i class="fab fa-android"></i> <i class="fab fa-windows"></i></a>
    			    <a href="tel:+<?php echo $f_item['qty']; ?>" class="btn btn-primary"><i class="fas fa-mobile-alt"></i> Call <i class="fab fa-android"></i> <i class="fab fa-apple"></i></a>
    			  </div>
    			</div>
    		</div>
    		<?php
              }
              ?>
    	</div>
    	</div>
      </div>
  </div>
  <div class="tab-pane fade" id="hair" role="tabpanel" aria-labelledby="hair-tab">
      <div class="col-lg-12 col-sm-12">
    	<div class="container">
    	<div class="row">
            <?php
    			$q_item = $conn->query("SELECT * FROM `cart` WHERE category='Hair' order by promo desc") or die(mysqli_error());
    			while($f_item = $q_item->fetch_array()){
    		?>
    		<div data-search="<?php echo $f_item['item_name']; ?>" class="col-lg-4 col-md-4 col-sm-6">
    			<div class="card">
    			    <div class="ribbon">
                      <span>-<?php echo $f_item['disc']; ?>%</span>
                    </div>
    			  <img src="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>" class="zoom card-img-top" alt="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>">
    			  <span class="shopname">@<?php echo $f_item['data_des']; ?></span>
    			  <div class="card-body text-center">
    			    <h3><span class="price badge badge-warning"></span></h3>
    			    <p class="price">₵<?php echo $f_item['price']; ?><sup>.<?php echo sprintf("%02s", $f_item['decml']) ?></sup></p>
    			    <p class="ititle"><?php echo $f_item['item_name']; ?></p>
    			    <a href="https://api.whatsapp.com/send?phone=+<?php echo $f_item['qty']; ?> &text=Hello <?php echo $f_item['data_des']; ?>, I'm interested in *<?php echo $f_item['item_name']; ?>*, Price: *₵<?php echo $f_item['price']; ?>.<?php echo sprintf("%02s", $f_item['decml']) ?>*. &copy;phrimpscollections.com" class="fa-lg add-to-cart button" target="_blank"><i class="fab fa-whatsapp"></i> Shop Now <i class="fab fa-android"></i> <i class="fab fa-windows"></i></a>
    			    <a href="tel:+<?php echo $f_item['qty']; ?>" class="btn btn-primary"><i class="fas fa-mobile-alt"></i> Call <i class="fab fa-android"></i> <i class="fab fa-apple"></i></a>
    			  </div>
    			</div>
    		</div>
    		<?php
              }
              ?>
    	</div>
    	</div>
      </div>
  </div>
  <div class="tab-pane fade" id="clothing" role="tabpanel" aria-labelledby="clothing-tab">
      <div class="col-lg-12 col-sm-12">
    	<div class="container">
    	<div class="row">
            <?php
    			$q_item = $conn->query("SELECT * FROM `cart` WHERE category='Clothing' order by promo desc") or die(mysqli_error());
    			while($f_item = $q_item->fetch_array()){
    		?>
    		<div data-search="<?php echo $f_item['item_name']; ?>" class="col-lg-4 col-md-4 col-sm-6">
    			<div class="card">
    			    <div class="ribbon">
                      <span>-<?php echo $f_item['disc']; ?>%</span>
                    </div>
    			  <img src="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>" class="zoom card-img-top" alt="<?php if (empty($f_item['image'])){echo "img/noimage.png";}else{echo "img/".$f_item['image'];} ?>">
    			  <span class="shopname">@<?php echo $f_item['data_des']; ?></span>
    			  <div class="card-body text-center">
    			    <h3><span class="price badge badge-warning"></span></h3>
    			    <p class="price">₵<?php echo $f_item['price']; ?><sup>.<?php echo sprintf("%02s", $f_item['decml']) ?></sup></p>
    			    <p class="ititle"><?php echo $f_item['item_name']; ?></p>
    			    <a href="https://api.whatsapp.com/send?phone=+<?php echo $f_item['qty']; ?> &text=Hello <?php echo $f_item['data_des']; ?>, I'm interested in *<?php echo $f_item['item_name']; ?>*, Price: *₵<?php echo $f_item['price']; ?>.<?php echo sprintf("%02s", $f_item['decml']) ?>*. &copy;phrimpscollections.com" class="fa-lg add-to-cart button" target="_blank"><i class="fab fa-whatsapp"></i> Shop Now <i class="fab fa-android"></i> <i class="fab fa-windows"></i></a>
    			    <a href="tel:+<?php echo $f_item['qty']; ?>" class="btn btn-primary"><i class="fas fa-mobile-alt"></i> Call <i class="fab fa-android"></i> <i class="fab fa-apple"></i></a>
    			  </div>
    			</div>
    		</div>
    		<?php
              }
              ?>
    	</div>
    	</div>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart Calculator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="needs-validation" method="post" action="send_mail.php" novalidate>
      
      <div class="modal-footer"><p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Order Now</button></p>
      </div>
        <div class="collapse" id="collapseExample">
          <div class="card card-body card-color">
              <h4>Order Form</h4>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationTooltip01">Full name</label>
                  <input type="text" class="form-control" id="validationTooltip01" name="fname" placeholder="Full Name" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationTooltipEmail">Email</label>
                  <input type="email" class="form-control" id="validationTooltipEmail" name="email" placeholder="Email" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationServerPhone">Phone</label>
                  <div class="input-group">
                    <input type="tel" class="form-control" id="validationServerPhone" name="phone" placeholder="Phone" aria-describedby="inputGroupPrepend3" required>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationServer04">Address</label>
                  <input type="text" class="form-control" id="validationServer04" name="address" placeholder="Address" required>
                </div>
              </div>
                <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationServer03">City</label>
                  <input type="text" class="form-control" id="validationServer03" name="city" placeholder="City" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="inlineFormCustomSelectPref">Region</label>
                  <select class="custom-select" name="region" id="inlineFormCustomSelectPref">
                    <option selected>Choose...</option>
                    <option value="Central">Ahafo</option>
                    <option value="Ashanti">Ashanti</option>
                    <option value="Bono">Bono</option>
                    <option value="Bono East">Bono East</option>
                    <option value="Central">Central</option>
                    <option value="Eastern">Eastern</option>
                    <option value="Greater Accra">Greater Accra</option>
                    <option value="North East">North East</option>
                    <option value="Northern">Northern</option>
                    <option value="Oti">Oti</option>
                    <option value="Savanna">Savanna</option>
                    <option value="Upper East">Upper East</option>
                    <option value="Upper West">Upper West</option>
                    <option value="Western">Western</option>
                    <option value="Western North">Western North</option>
                    <option value="Volta">Volta</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 mb-3">
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="payment" checked class="custom-control-input" value="Pay before delivery">
                  <label class="custom-control-label" for="customRadioInline1">Pay Before Delivery</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="payment" class="custom-control-input" value="Pay on Delivery">
                  <label class="custom-control-label" for="customRadioInline2">Pay On Delivery</label>
                </div>
                </div>
                <div class="col-md-12 mb-3">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" name="agreement" value="Agree to Terms and Conditions" id="customSwitch1" required>
                  <label class="custom-control-label" for="customSwitch1">Agree to Terms and Conditions</label>
                </div>
                </div>
              <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="col-md-12 col-lg-12 text-center"><h2 class="sm">Our Stats</h2></div>
<div class="container">
<div class="col-md-12 col-lg-12 col-sm-12 row text-center">
    <div class="counter col-md-4 col-lg-4">
      <i class="fa fa-shopping-bag fa-2x"></i>
       <?php
        $query="select count(*)as count from sales";
        $result=$conn->query($query);
        $sales=mysqli_fetch_assoc($result)["count"];
        ?>
      <h2 class="timer count-title count-number" data-to="1500<?php echo $sales; ?>" data-speed="1500"></h2>
    </div>

    <div class="counter col-md-4 col-lg-4">
      <i class="fa fa-tags fa-2x"></i>
      <?php
        $query="select count(*)as count from cart";
        $result=$conn->query($query);
        $items=mysqli_fetch_assoc($result)["count"];
        ?>
      <h2 class="timer count-title count-number" data-to="<?php echo $items; ?>" data-speed="1500"></h2>
    </div>

    <div class="counter col-md-4 col-lg-4">
      <i class="fa fa-clock fa-2x"></i>
      <?php
        $query="select count(*)as count from pending";
        $result=$conn->query($query);
        $pending=mysqli_fetch_assoc($result)["count"];
        ?>
      <h2 class="timer count-title count-number" data-to="<?php echo $pending; ?>48" data-speed="1500"></h2>
    </div>
</div>
</div>
<div class="col-lg-12 col-md-12">
	<div class="container">
		<div class="card text-center">
		  <div class="card-header">
		    Contact Us
		  </div>
		  <div class="card-body">
		    <p class="card-text"><i class="fas fa-envelope"></i> info@phrimpscollections.com</p>
            <p class="card-text"><i class="fas fa-phone-volume"></i> +233552530981</p>
		    <h5 class="card-title">Location <i class="fa fa-map-marker"></i></h5>
		    <p class="card-text">Kumasi, Ashanti Region, Ghana</p>
		    <h5 class="card-title">Delivery</h5>
		    <p class=" alert alert-success" role="alert"><i class="fas fa-truck"></i> Kumasi (Free) <i class="fas fa-check-circle"></i></p>
		    <p class=" alert alert-warning" role="alert"><i class="fas fa-truck"></i> Other Parts of Ghana (GHS10) <i class="fas fa-check"></i></p>
		    <p class=" alert alert-danger" role="alert"><i class="fas fa-plane-departure"></i> Outside Ghana <i class="fas fa-times-circle"></i></p>
		  </div>
		  <div class="card-footer">
		  	<a href="tel:+233552530981" class="btn btn-primary"><i class="fas fa-phone-square-alt"></i> Call for Enquiries</a>
            <!--<a href="#" class="btn btn-primary"><i class="fas fa-truck-loading"></i> Bulk Purchase</a>-->
		  </div>
		</div>
	</div>
</div>
<!-- Footer -->
<footer class="page-footer font-small bg-light">

  <!-- Footer Elements -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Instagram +-->
          <a class="gplus-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Facebook -->
          <a href="https://fb.me/phrimpscollections" class="li-ic">
            <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--WhatsApp-->
          <a href="https://wa.me/+233552530981" class="ins-ic">
            <i class="fab fa-whatsapp fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3" style="background: #E0E0E0;">© <?php echo date('Y') ?>
     Powered by <a href="https://programx.io">Programx</a>
  </div>
</footer>
<!-- Footer -->

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/e-search.js"></script>
<script type="text/javascript">
function toggleShow () {
  var el = document.getElementById("box");
  el.classList.toggle("show");
}
    	     $('input.search-txt').search(function(){

          		//execute after done typing.

      });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/all.min.js"></script>
<script src="js/solid.js"></script>
<script src="js/regular.js"></script>
<script src="js/brands.js"></script>
<script src="js/main.js"></script>
</body>
</html>