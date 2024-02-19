<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Prop Majestic-RealEstate</title>
</head>

<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row "> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>User Listed Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">User Listed Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container" >
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">User Listed Property</h2>
							<?php 
								if(isset($_GET['msg']))	
								echo $_GET['msg'];	
							?>
                        </div>
					</div>

                    <div style="width: 100%; overflow-x: scroll;">
					<table class="items-list col-lg-12" style="border-collapse:inherit; ">

                        <thead>
                          
                             <tr  class="bg-primary">
                                <th class="text-white font-weight-bolder">Properties</th>
                                <th class="text-white font-weight-bolder">BHK</th>
                                <th class="text-white font-weight-bolder">Reason</th>
                                <th class="text-white font-weight-bolder">Added Date</th>
								<th class="text-white font-weight-bolder">Status</th>
                                <th class="text-white font-weight-bolder">Update</th>
								<th class="text-white font-weight-bolder">Delete</th>
                             </tr>
                            
                        </thead>
                        <tbody>
						
							<?php 
							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `property` WHERE uid='$uid'order by date desc");
								while($row=mysqli_fetch_array($query))
								{
							?>
                            <tr>
                                <td>
									<img  src="admin/property/<?php echo $row['18'];?>" style="height: 133.32px; object-fit: cover;"  alt="pimage" >
                                    <div class="property-info d-table">
                                        <h5 class="text-secondary text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                        <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-primary font-13"></i>&nbsp; <?php echo $row['15'];?></span>
                                        <div class="price mt-3">
											<span class="text-primary">₹&nbsp;<?php echo $row['13'];?></span>
										</div>
                                    </div>
								</td>
                                <td><?php echo $row['4'];?></td>
                                <td class="text-capitalize">For <?php echo $row['5'];?></td>
                                <td><?php echo $row['26'];?></td>
								<td class="text-capitalize"><?php echo $row['24'];?></td>
                                <td><a class="btn btn-primary" href="submitpropertyupdate.php?id=<?php echo $row['0'];?>">Update</a></td>
								<td><a class="btn btn-primary" href="submitpropertydelete.php?id=<?php echo $row['0'];?>">Delete</a></td>
                            </tr>
							<?php } ?>
							
                        </tbody>
                    </table>   
                </div>         
            </div>
        </div>
	<!--	Submit property   -->
        
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 
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
<!--	Js Link
============================================================--> 
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
<script src="js/custom.js"></script>

<!-- Chat Bot Time Out Code -->
<script>

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

    function checkForBtnInterval() {
        setInterval(() => {
            const userIconSvg = document.querySelector(".user_icon_svg");
            if(window.innerWidth <= 520){
            if(userIconSvg) {
                const closeBtn = document.querySelector(".closebtn");
                if(closeBtn) {

                } else {
                    var chatbotHeader = document.querySelector(".header_right.absolute.right-0");
                    var closeButton = '<span class="mr-1 flex closebtn"><svg class="w-full h-full" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#ffffff" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg></span>';
                    chatbotHeader.innerHTML += closeButton;
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

 window.onload = () => {
    checkForBtnInterval();

    // function keepCheckingContent(){
    //     var chat = document.getElementById("assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4");
    //     if(chat.innerHTML == ""){
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // setTimeout(() => {
    //     var chat_bot = document.querySelectorAll("button");
    //     var header_left = document.getElementsByClassName("width_container_mobile"); //document.querySelectorAll('div .width_container_mobile');
    //     var width = window.innerWidth;
    //     var header_right = document.querySelectorAll(".header_right");
    //     // alert(width);
    //     if(width > 600){
    //         chat_bot[2].click();
    //     }
    //     setInterval(() => {
    //         if(!keepCheckingContent()){
    //             var header_left = document.getElementsByClassName("width_container_mobile");
    //             if(header_left.length > 0){
    //                 header_left[0].setAttribute("style", "z-index: 0; width: 100%; transform: none; margin: 0px;");
    //             }
    //         }
    //     }, 2000);
    // }, 2000);
    
}
</script>
<!-- Chat Bot Time Out Code End -->
</body>
</html>