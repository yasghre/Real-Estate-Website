<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

////// code
$error='';
$msg='';
if(isset($_POST['insert']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];

	$content=$_POST['content'];
	
	$uid=$_SESSION['uid'];
	
	if(!empty($name) && !empty($phone) && !empty($content))
	{
		
		$sql="INSERT INTO feedback (uid,fdescription,status) VALUES ('$uid','$content','0')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Feedback Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Feedback Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
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
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Profile</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Profile</h2>
                        </div>
					</div>
                <div class="dashboard-personal-info p-5 bg-white">
                    <form action="#" method="post">
                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Feedback Form</h5>
						<?php echo $msg; ?><?php echo $error; ?>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="user-id">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>                
                                
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone"  class="form-control" placeholder="Enter Phone" maxlength="10">
                                </div>

                                <div class="form-group">
                                    <label for="about-me">Description</label>
                                    <textarea class="form-control" name="content" rows="7" placeholder="Enter Description"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary mb-4" name="insert" value="Send">
                            </div>
							</form>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5 col-md-12">
								<?php 
									$uid=$_SESSION['uid'];
									$query=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$uid'");
									while($row=mysqli_fetch_array($query))
									{
								?>
                                <div class="user-info mt-md-50"> <img src="admin/user/<?php echo $row['6'];?>" alt="userimage">
                                    <div class="mb-4 mt-3">
                                        
                                    </div>
									
                                    <div class="font-18">
                                        <div class="mb-1 text-capitalize"><b>Name:</b> <?php echo $row['1'];?></div>
                                        <div class="mb-1 text-capitalize"><b>Email:</b> <?php echo $row['2'];?></div>
                                        <div class="mb-1 text-capitalize"><b>Phone:</b> <?php echo $row['3'];?></div>
										<div class="mb-1 text-capitalize"><b>Role:</b> <?php echo $row['5'];?></div>
                                    </div>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                    
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