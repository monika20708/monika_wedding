<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
 <link rel="stylesheet" type="text/css" href="https://slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://slick/slick.css"/>

</head>
<body>
    <h1>slick slider</h1>
   <ul class="custom-slider">
    <li><h2>1</h2></li>
        <li><h2>2</h2></li>
            <li><h2>3</h2></li>
                <li><h2>4</h2></li>
                    <li><h2>5</h2></li>
   </ul>
    

  <!-- <script src="=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script> -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>




<script>
    $('.custom-slider').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$(document).ready(function(){
  $('.custom-slider').slick({
    setting-name: setting-value
  });
});

</script>

</body>
</html>