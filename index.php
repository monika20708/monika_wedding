






<?php
include 'db.php';
session_start();
$id=$_SESSION['id'];
// $sql="select * from wedding_Dictionary where name='$id'";
// $result= $conn->query($sql);
// $row= $conn->fetch_assoc();
// $name=$row['name'];
if($id==''){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="media queery.css">

</head>
<body>
  <!--navbar start-->
 <!-- <nav class="navbar navbar-expand-lg navbar-white bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/Logo2-1.png" alt="" style=" background: remove;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/index.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://127.0.0.1:5500/weddingthemes.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Wedding Themes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Traditional Decor</a></li>
            <li><a class="dropdown-item" href="#">Modem Decor</a></li>
            <li><a class="dropdown-item" href="#">Contemporary Decor</a></li>
            <li><a class="dropdown-item" href="#">Designer Weddings</a></li>
            <li><a class="dropdown-item" href="#">Concept Theme</a></li>
          </ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://127.0.0.1:5500/Destination%20Wedding.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Destination Wedding
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Jaipur</a></li>
              <li><a class="dropdown-item" href="#">jodhpur</a></li>
              <li><a class="dropdown-item" href="#">Udaipur</a></li>
              <li><a class="dropdown-item" href="#">Agra</a></li>
              <li><a class="dropdown-item" href="#">Goa</a></li>
              <li><a class="dropdown-item" href="#">Varanasi</a></li>
              <li><a class="dropdown-item" href="#">Jim Corbett</a></li>
            </ul>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/blog.html">Blog</a>
              </li>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-success"><i class="fa fa-phone" aria-hidden="true"></i>+91-9711301288</button>
  </div>
</nav>   -->
<?php @include'header.php' ?>
<!--naver end--> 
<!--slider start-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner1-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block w3-container w3-center w3-animate-zoom">
          <h1 class="h1">TURING IDIAS INTO REALITY</h1>
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner2-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block w3-container w3-center w3-animate-zoom">
          <h1 class="h1">TURING IDIAS INTO REALITY</h1>
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block w3-container w3-center w3-animate-zoom">
          <h1 class="h1">TURING IDIAS INTO REALITY</h1>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
<!--slider end-->
<!--contact satart-->
<div class="con">contact us

</div>
<!--contact end-->
<!--whatsapp start-->
<div class="col">
  <div class="box">
    <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:60px; color: white;"></i>

  </div>

</div>
<!--watsapp end-->
<!--EXPERIENCED  start-->
<div class="container" >
  <div class="row w3-animate-bottom id="arti1">
    <img src="img/Logo2-1.png" alt="" id="arti2" style="width:30%; margin-left: 384px;">
    <h4 style="margin-left: 228px; color: green; font-size: 22px;">INDIA'S MOST EXPERIENCED WEDDING & EVENT DECORATORS</h4>
  <p style=" text-align: center ;">Being in the industry for more than 25 years, we have made thousands of events come to life that<br>brought smiles to an endless number of faces. FNP Weddings has been part of amazing<br> celebrations since 1994 that give immense pride to be in the industry.</p>
  </div>

</div>

<div class="container">
<div class="row w3-animate-bottom" style="background-color: rgba(239, 235, 229, 0.847); height: 80px; width: 100%; text-align: center;">
  <div class="col" style="text-align: center; margin-top: 30px; color: green; font-size: 20px;">
    <span>27</span> YEARS OF EXPERIENCE

  </div>
  <div class="col" style="text-align: center; margin-top: 30px; color: green; font-size: 20px;"><span>20,000 +</span> EVENTS DONE</div>
  <div class="col " style="text-align: center; margin-top: 30px; color: green; font-size: 20px;"><span>100%</span>SATISFACTION</div>
</div>

</div>
<!--EXPERIENCED  end-->
<!-- REALITY start-->
<div class="contact">
  <div class="row :" style="height:70px;width: 100%; margin-top: 30px;" id="box3">
    <h1 class="this">THIS HOW WE TURN A DREAM INTO REALITY</h1>
<hr style="width:15%; background-color: hsl(124, 94%, 49%);border-bottom: 10px; margin-left: 110px; ">

  </div>

</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 w3-animate-left">
<img src="img/Space-Planning.jpg" alt="" class="Space-Planning ">
</div>
    <div class="col-md-4 w3-animate-right">
      <h2 class="space">SPACE PLANNING</h2>
      <p class="" style="text-align: center; font-size: 15px;">As the event decorator, you’re responsible for<br> the overall atmosphere of the event. Event<br> decor is more than simple decoration.</p>
          </div>
       
  </div>

</div>
<div class="container">
  <div class="row">
    <div class="col-md-4 w3-animate-left">
      <h2 class="vision1">YOUR VISION - OUR INOVATION</h2>
      <p style="text-align: center; font-size: 15px;">How guests feel when they walk into the<br> venue will affect their overall experience, and<br> afterward, how fondly they remember it.</p>
    </div>
    <div class="col-md-8 w3-animate-right">
      <img src="img/your-vision-our-inovation.jpg" alt="" class="vision">
          </div>
       
  </div>

</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 w3-animate-left">
<img src="img/Desiging-Conceptulization.jpg" alt="" class="Space-Planning ">
</div>
    <div class="col-md-4 w3-animate-right">
      <h2 class="desi">DESIGNING & CONCEPTUALIZATION</h2>
      <p class="" style="text-align: center; font-size: 15px;"> We offer design and decor services for every <br>need. Our vast experience is key in helping us <br>suggest different themes and designs which suit<br> your tastes and personality.</p>
          </div>
       
  </div>

</div>
<div class="container">
  <div class="row">
    <div class="col-md-4 w3-animate-left">
      <h2 class="vision1">HAND PICKED ELEMENTS</h2>
      <p style="text-align: center; font-size: 15px;">Picture yourself on your wedding day; we give<br> shape to that very vision on this beautiful<br> occasion. We create a special environment that<br> reflects what this celebration means to you.</p>
    </div>
    <div class="col-md-8 w3-animate-right">
      <img src="img/Hand-Picked-Element.jpg" alt="" class="vision">
          </div>
       
  </div>

</div>
<!-- REALITY start-->
<!--WEDDING DECORATION THEMES satart-->
<div class="contact">
  <div class="row">
    <h1 class="this">WEDDING DECORATION THEMES</h1>
    <hr style="width:15%; background-color: hsl(124, 94%, 49%);border-bottom: 10px; margin-left: 15px; ">


  </div>

</div>

<div class="container">
<div class="row zoom">

</div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-6 w3-animate-zoomin ">
<img src="img/modren-theme.jpg" alt="" class="modren">
    </div>
    <div class="col-md-6">
      <img src="img/contempoary-theme.jpg" alt="" class="modren">
          </div>

  </div>

</div>
<!--WEDDING DECORATION THEMES end-->
<!--DESTINATION WEDDINGS satart-->
<div class="container" > 
  <div class="row ">
    <h1 style="margin:17px 10px 10px 2px;">DESTINATION WEDDINGS</h1>
    <hr style="width:15%; background-color: hsl(124, 94%, 49%);border-bottom: 10px; margin-left: 10px; ">


  </div>

</div>
<div class="container">
<div class="row">

  <video src="img/destinationwed.mp4"  type="video/mp4" style=" margin: 10px 10px 10px 4px;" id="vid"></video>

</div>
</div>
<div class="container">
  <div class="row w3-animate-zoom" id="box4">
    
    <p style="text-align: center;">We have an experienced team who can manage everything, starting from selecting the venue to curating essential for your<br> destination wedding.</p>
  </div>
  </div>

</div>
<!--DESTINATION WEDDINGS satart-->
<!--show case satart-->
<div class="container">
  <div class="row">
    <h1>SHOW CASE</h1>
    <hr style="width:15%; background-color: hsl(124, 94%, 49%);border-bottom: 10px; margin-left: 10px; ">


  </div>

</div>
<div class="container">
  <div class="row" id="moun2">
    <div class="box5">
<img src="img/DSC_0323.jpg" alt="" class="dsc">
<a href=""></a>
    </div>
    <div class="box6">
<img src="img/16-2.jpg" alt="" class="dsc">
<a href=""></a>
    </div>
<div class="box7">
  <img src="img/0H6A2240-1.jpg" alt=" " class="h6A">
<a href=""></a>
</div>
<div class="box8">
  <img src="img/IMG_0654-1.jpg" alt=" " class="mm">
<a href=""></a>
</div>
<div class="box9">
  <img src="img/24-1.jpg" alt=" " class="h6A">
<a href=""></a>
</div>
<div class="box10">
  <img src="img/DSC_2040.jpg" alt=" " class="h6A">
<a href=""></a>
</div>
<div class="box11">
  <img src="img/0H6A2240-1.jpg" alt=" " class="H6A">
<a href=""></a>
</div>
<div class="box12">
  <img src="img/DSC_0007.jpg" alt=" " class="Dsc">
<a href=""></a>
</div>
  </div>

</div>
<!--show case end-->
<div class="container">
  <div class="row">
    <h1>IN THE NEWS </h1>
    <hr style="width:15%; background-color: hsl(124, 94%, 49%);border-bottom: 10px; margin-left: 10px; ">


  </div>

</div>
<div class="container">
<div class="row">
  <div class="col-md-4">
<div class="slide2">
  <img src="img/blog-1.jpg" alt="" class="slide2-img">
  <p><i class="fa fa-user" aria-hidden="true"></i>Admin</p>
  <p><i class="fa fa-calendar-o" aria-hidden="true"></i>01 jan 2023</p>
<h1><a href=""></a>LUXURY VENUES FOR WEDDINGS ACROSS DELHI NCR</h1 >
<p>ITC MAURYA This venue is a timeless luxury & <br>captivating beauty of all times. The hotel rises up with <br>the

  READ MORE </p>
</div>
  </div>
  <div class="col-md-4">
    <div class="slide2">
      <img src="img/blog-2.jpg" alt="" class="slide2-img">
      <p><i class="fa fa-user" aria-hidden="true"></i>Admin</p>
      <p><i class="fa fa-calendar-o" aria-hidden="true"></i>01 jan 2023</p>
    <h1><a href=""></a></h1 >
    <p>ITC MAURYA This venue is a timeless luxury & <br>captivating beauty of all times. The hotel rises up with <br>the
    
      READ MORE </p>
    </div>
      </div>
      <div class="col-md-4">
        <div class="slide2">
          <img src="img/blog-3.jpg" alt="" class="slide2-img">
          <p><i class="fa fa-user" aria-hidden="true"></i>Admin</p>
          <p><i class="fa fa-calendar-o" aria-hidden="true"></i>01 jan 2023</p>
        <h2><a href=""></a>LUXURY VENUES FOR WEDDINGS ACROSS DELHI NCR</h2>
        <p>ITC MAURYA This venue is a timeless luxury & <br>captivating beauty of all times. The hotel rises up with <br>the
        
          READ MORE </p>
        </div>
          </div>
</div>
</div>
<!--show case end-->


<!-- start testimal code -->
<div class="container">
  <div class="row">
    <h1>TESTIMONIAL </h1>
    <hr style="width:15%; background-color: hsl(124, 94%, 49%);border-bottom: 10px; margin-left: 10px; ">
 </div>
</div>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="margin-top: 50px;">
          <div class="carousel-item active">
            <div class="row">

           <div class="col-md-4 col-xl-6 col-12" >
            <h5 style="margin-left: 100px; font-size: 50px;">MR.SHYAM</h5>
              <p style=" margin-left: 100px; font-size: 30px;">"Huge chandeliers and exotic flower arrangements <br> were amazing. Thanks aton for making our day so <br> special."</p>
        </div>
        <div class="col-md-4 col-xl-6 col-12" >
            <img src="img/Testimonial1.jpg" alt="" style="width:90%;">
            
        </div>

           </div>
           
           
          </div>
          <div class="carousel-item">
            
            <div class="row">

                <div class="col-md-4 col-xl-6 col-12" >
                 <h5>MR.KAPIL</h5>
                 <P>"FNP Wedding team left me speechless! Huge<br> chandeliers and exotic flower arrangements were<br> amazing. Thanks a ton for making our day so special."</p>
             </div>
             <div class="col-md-4 col-xl-6 col-12" >
                 <img src="img/Testimonial1.jpg" alt="">
                 
             </div>
     
                </div>
            
          </div>
          <!-- <div class="carousel-item">
            <img src="/img/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
 
    
    
<!-- start testimal code  end-->
<div id="form-box">
  <div class="container text-align:center;">
    <h1 style="color: #fff;font-size: 30px;text-align:center; padding-top:90px;">LET US KNOU ABOUT OUR DECOVER</h1>
<form action="" method="POST">
    <div class="form-box">
    <h1 style="text-align: center;font-size:30px;">GET IN TOUCH</h1>
    <input type="text" name="name" id="name"placeholder="name*" class="name" required>
    <input type="phone" id="phone" name="phone" placeholder="phone Number*" class="phona" required>
    <select name="Event" class="Event " required>
      <option>--Event type*--</option><br><br>
      <option value="Wedding"  name="Event">Wedding</option><br><br>
      <option value="Pre-wedding"  name="Event">Pre-wedding</option>
      <option value="bajnawas"  name="Event">haldi & Mehandi</option>
      <option value="bajnawas"  name="Event">haldi & Mehandi</option>
      <option value="bajnawas"  name="Event">haldi & Mehandi</option>
      <option value="bajnawas"  name="Event">haldi & Mehandi</option></select>
  <input type="date" name="data" id="data" placeholder="Data of Event" class="data" required>
  <select name="Location" class="Location " required>
    <option>--Event Location*--</option><br><br>
    <option value="deli NCR"  name="Location">deli NCR</option><br><br>
    <option value="jaipur"  name="Location">jaipur</option>
    <option value="goa"  name="Location">goa</option>
    <option value="agra"  name="Location">agra</option>
    <option value="jodhpur"  name="Location">jodhpur</option>
    <option value="udaipur"  name="Location">udaipur</option></select>
<select name="lacs" class="BudgetRange " required>
 <option>--Budget Range*--</option><br><br>
  <option value="20Lacs-30Lacs" name="lacs">20Lacs-30Lacs</option><br><br>
  <option value="30Lacs-40Lacs" name="lacs">30Lacs-40Lacs</option>
  <option value="30Lacs-40Lacs" name="lacs">40Lacs-50Lacs</option>
  <option value="30Lacs-40Lacs" name="lacs">50Lacs-60Lacs</option>
  <option value="30Lacs-40Lacs" name="lacs">60Lacs-more</option></select>
<input type="text" id="emali" placeholder="Emali" class="emali"name=emali required>
<input type="text" id="password" placeholder="password" class="emali"name=password required>
<input type="text"  name="tell"id="Tell" placeholder="Tell us about your requirements, We'll get back to you on that ASAP
" class="Tell" required>
<button type="submit" name="submit" class="submit">submit</button></div></form></div></div>
<!--footer satart-->
<div class="row" style="text-align:center">
  <div class="col-xl-4 col-md-6 col-12">
<img src="img/Logo2-1.png" alt="">
<div style="text-align: center;"><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 24px; margin-left: 79px; color: green;"></i><a href=""></a>
<span style="margin-left: 10px; text-align: center;">FNP Estate Ashram Marg, Mandi Road,
  Gadaipur New Delhi - 110030</span>
</div><br>
<div><i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 24px; margin-left: 79px; color: green;"></i><a href=""></a> -->
  <span style="margin-left: 30px;">info@fnpweddings.com</span>
  </div><br>
  <div style=" margin-right: 20px;"><i class="fa fa-phone" aria-hidden="true"style="font-size: 24px; margin-left: 79px; color: green;"></i><a href=""></a>
  <span style="margin-left: 30px;">+12345789</span>
  </div><br><br>
  <i class="fa fa-twitter" aria-hidden="true" style="font-size: 44px;  background-color: green; border-radius: 5px 5px 5px 5px; color: #fff; margin-left:10px; "></i>
  <i class="fa fa-facebook-square" aria-hidden="true"  style="font-size: 44px; background-color: green; border-radius: 5px 5px 5px 5px; color: #fff; margin-left:10px;"></i>
  <i class="fa fa-linkedin" aria-hidden="true"  style="font-size: 44px; background-color: green; border-radius: 5px 5px 5px 5px; color: #fff; margin-left:10px;"></i>
  <i class="fa fa-instagram" aria-hidden="true"  style="font-size: 44px; background-color: green; border-radius: 5px 5px 5px 5px; color: #fff; margin-left:10px;"></i>

  </div>
  <div class="col-xl-4 col-md-6 col-12">
    <h4>Quick Links</h4>
    <div style="width: 16%; height: 4px; background-color: green; margin-left: 162px;"></div>
    <div class="">
      <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">About us</a>
    </div>
    <div class="">
      <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Wedding Themes</a>
  
          </div>
          <div class="">
            <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Disclaimer</a>
        
                </div>
                <div class="">
                  <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Testimonials</a>
              
                      </div>
                      <div class="">
                        <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Our Blogs</a>
                    
                            </div>
                            <div class="">
                              <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Anual Return</a>
                          
                                  </div>
      </div>
      <div class="col-xl-4 col-md-6 col-12">
        <h4>Destination Wedding</h4>
        <div style="width: 16%; height: 4px; background-color: green; margin-left: 162px;"></div>
        <div class="">
          <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href=""> Jaipur</a>
        </div>
        <div class="">
          <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Udaipur</a>
      
              </div>
              <div class="">
                <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Jodhpur</a>
            
                    </div>
                    <div class="">
                      <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Agra</a>
                  
                          </div>
                          <div class="">
                            <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Goa</a>
                        
                                </div>
                                <div class="div-a">
                                  <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-top: 30px;"></i> <a href="">Varanasi</a>
                              
                                      </div>
          </div>
            <h1><a href="logout.php">Logout</a></h1>
          </div>
          <div style="width: 98%; height: 100px; background-color: silver; margin-left: 20px; text-align: center;">
            Copyright © 2023 FNP Weddings & Events (India) Pvt. Ltd.
          </div>





          <!--footer end-->







<!-- ended testimal code

 

<-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6426600a31ebfa0fe7f5a9b5/1gsqueb4u';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>