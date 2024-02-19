<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
		
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon-2.png">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->    

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<!--	Title
	=========================================================-->
<title>Prop Majestic-Real Estate</title>
</head>

 
   
<body>


<!--	Page Loader  -->
<!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->

        
		
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative animate__animated animate__slideInDown" style="background-image: url('images/banner/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mb-4 animate__animated animate__slideInRight pt-3"><span class="text-primary">Ghar</span>
                                Hai Lena To... </h1>
                                <h1 class="mb-4 animate__animated animate__slideInLeft"><span class="text-warning">Prop</span> <span class="text-danger">Majestic</span>
                                Hai Na... </h1>
                            <form method="post" action="propertygrid.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type" required>
                                                <option value="">Select Type *</option>
												<option value="appartment">Apartment</option>
												<option value="flat">Flat</option>
												<option value="bungalow">Bungalow</option>
												<option value="commercial">Commercial</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype" required>
                                                <option value="">Select Status *</option>
												<option value="rent">Rent</option>
												<option value="sale">Sale</option>
												<option value="rent/sale">Rent/sale</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                        <select class="form-control" name="city" required>
                                                <option value="">Select City *</option>
												<option value="Pune">Pune</option>
												<option value="Mumbai">Mumbai</option>
                                                <option value="Bangalore">Bangalore</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-primary w-100">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->
        
        <!--	Text Block One
		======================================================-->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center  rounded mb-4 transation-3s"> 
								<i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Selling Service</a></h5>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center  rounded mb-4 transation-3s"> 
								<i class="flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Rental Service</a></h5>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center   rounded mb-4 transation-3s"> 
								<i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Property Listing</a></h5>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center  rounded mb-4 transation-3s"> 
								<i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Legal Investment</a></h5>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-----  Our Services  ---->

        <!--	Popular Place -->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Popular Places</h2></div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 pb-1">
                            <a href="stateproperty.php?id=<?php echo $row['city']?>">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/1.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(city) as prop_count, property.* FROM property where city like '%pune%'");
											while($row=mysqli_fetch_assoc($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['city']?>"><?php echo $row['city'];?></a></h4>
                                    <span><?php 
												$total = $row['prop_count'];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/2.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(city), property.* FROM property where city='mumbai' or 'Mumbai'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['city']?>"><?php echo $row['city'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/3.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(city), property.* FROM property where city='bangalore' or 'Bangalore'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['city']?>"><?php echo $row['city'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/4.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='rajasthan'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!--	Popular Places -->
		
        <!--	Recent Properties  -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                    </div>
                    <!--- <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> --->
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 6");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                    <div class="col-md-6 col-lg-4">
                                        <a href="propertydetail.php?pid=<?php echo $row['0'];?>">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage" style="height:340px">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white text-capitalize">For <?php echo $row['5'];?></div>
                                                <!-- <div class="price text-primary"><b>$<?php echo $row['14'];?> </b><span class="text-white"><?php echo $row['12'];?> Sqft</span></div> -->
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <h5 class="text-secondary hover-text-primary mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                                    <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $row['15'];?></span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span><?php echo $row['12'];?></span> Sqft</li>
                                                        <li><span><?php echo $row['6'];?></span> Beds</li>
                                                        <li><span><?php echo $row['7'];?></span> Baths</li>
                                                        <li><span><?php echo $row['9'];?></span> Kitchen</li>
                                                        <li><span><?php echo $row['8'];?></span> Balcony</li>
                                                        
                                                    </ul>
                                                </div>
                                                <!-- <div class="p-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize"><i class="fas fa-user text-primary mr-1"></i>By : <?php echo $row['uname'];?></div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 Months Ago</div>
                                                </div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
									<?php } ?>

                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	Recent Properties  -->
        
        <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Certified professionals</h5>
										<p>It is our commitment to provide you with exceptional service from a team of highly skilled, uniquely talented individuals with high integrity, extensive professional knowledge and experience, far‐reaching connections and excellence in home marketing.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Powerful Ideas</h5>
										<p>Not all ideas are created equal. The success of your sale or purchase will depend on the quality of the ideas used to ensure you get the best results.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Trusted Team</h5>
										<p>Every single day - we take a stand for our clients. As expert real estate strategists - we simply won’t do the deal unless it’s a great deal and you are completely happy.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        <!-- <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <!--	How It Work -->
        
        <!--	Achievement
        ============================================================-->
        <div class="full-row overlay-light mt-5" style="background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="fact-counter">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-primary" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-dark h5">Property Available</div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-primary" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='sale'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-dark h5">Sale Property Available</div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-primary" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='rent'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-dark h5">Rent Property Available</div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <?php
										$query=mysqli_query($con,"SELECT count(uid) FROM user");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Registered Users</div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        
        
		
		<!--	Testonomial -->
		<!-- <div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-primary">
									
										<?php
													
												$query=mysqli_query($con,"select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
												while($row=mysqli_fetch_array($query))
													{
										?>
										<div class="item">
											<div class="p-4 bg-primary down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-primary d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
											</div>
										</div>
										<?php }  ?>
										
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div> -->
		<!--	Testonomial -->
		
		
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <!-- <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>  -->
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 

<!-- Chat Bot Code -->
<div id="assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4"></div>
  <script src="https://unpkg.com/assistant-widget@1.5.6/dist/lib.js"></script>
  <script>
      WAWidget.init({
          el: document.querySelector("#assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4"),
          endpoint: "https://assistant.workativ.com/widget",
          widget_id: "05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4",
          openByDefault: false
      });
  </script>
   <!-- Chat Bot Code End -->
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>


<!-- Chat Bot Time Out Code -->
<script>

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

    function checkForBtnInterval() {
        setInterval(() => {
            const userIconSvg = document.querySelector(".user_icon_svg");
            if(window.innerWidth < 600){
            if(userIconSvg) {
                const closeBtn = document.querySelector(".closebtn");
                if(closeBtn) {

                } else {
                    var chatbotHeader = document.querySelector(".header_right.absolute.right-0");
                    var closeButton = '<span class="mr-1 flex closebtn"><svg class="w-full h-full" style="margin-top:-23px;height:29px;" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#ffffff" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg></span>';
                    chatbotHeader.innerHTML = closeButton;
                    console.log(chatbotHeader);
                    const closeBtn = document.querySelector(".closebtn");
                    closeBtn.addEventListener("click", closeChatbotWidget);
                }
            } else {
            }
            } else {
                const closeBtn = document.querySelector(".closebtn");
                if(closeBtn) {
                    closeBtn.parentNode.removeChild(closeBtn); 
                }
            }
        },2000)
    }

    function closeChatbotWidget() {
        var workativCloseBth = document.querySelector(".relative.inline-flex.w-full.justify-end>button")
        workativCloseBth.click();
    }
    
    // setInterval(() => {
    //     console.log(document.querySelectorAll("button"));
    // }, 1000);

 window.onload = () => {
    //  alert(window.innerWidth);
    checkForBtnInterval();
    
    setTimeout(() => {
        var chat_bot = document.querySelectorAll("button");
    var width = window.innerWidth;
    
        if(width > 600){
            chat_bot[2].click();
        }
        // console.log(chat_bot);
    }, 2000);
     
    //  setInterval(() => {
    //     //  if(keepCheckingContent()){
    //     //      var width = window.innerWidth;
    //     //     var chat_bot = document.querySelectorAll("button");
    //     //     //  alert('Chat Content Loaded');
    //     //     console.log(chat_bot);
    //     //  }
    //     var chat_bot = document.querySelectorAll("button");
    //     var chat = document.getElementById("assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4");
    //     if(chat.innerHTML == ""){
            
    //         console.log(chat_bot);
    //     } else {
    //         // return false;
    //     }
    //  }, 1000)
    // //  setTimeout(() => {
    // //      if(width > 600){
    // //          chat_bot[2].click();
    // //      }
         
    // //  }, 2000);


    function keepCheckingContent(){
        var chat = document.getElementById("assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4");
        if(chat.innerHTML == ""){
            return true;
        } else {
            return false;
        }
    }
    // setTimeout(() => {
    //     var chat_bot = document.querySelectorAll("button");
    //     // var header_left = document.getElementsByClassName("width_container_mobile"); //document.querySelectorAll('div .width_container_mobile');
    //     var width = window.innerWidth;
    //     var header_right = document.querySelectorAll(".header_right");
    //     // alert(width);
    //     if(width > 600){
    //         chat_bot[2].click();
    //     }
    //     // setInterval(() => {
    //     //     if(!keepCheckingContent()){
    //     //         var header_left = document.getElementsByClassName("width_container_mobile");
    //     //         if(header_left.length > 0){
    //     //             header_left[0].setAttribute("style", "z-index: 0; width: 100%; transform: none; margin: 0px;");
    //     //         }
    //     //     }
    //     // }, 2000);
    // }, 2000);
    
}
</script>
<!-- Chat Bot Time Out Code End -->

</body>

</html>