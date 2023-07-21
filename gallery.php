<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/style.css">
    <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'header.php' ?>
  
         <div class="container">
            <div class="row">
              <div class="col"><a href=""><button>show all</button></a></div>
              <div class="col"><a href=""><button>contemporary</button></a></div>
              <div class="col"><a href=""><button>modern</button></a></div>
              <div class="col"><a href=""><button>Traditional</button></a></div>
              <div class="col"><a href=""><button>concepts</button></a></div>
              <div class="col"><a href=""><button>Entainment</button></a></div>
            </div> 

    </div>

     <!-- start cards code  -->
  <div class="container">
    <div class="row" style="margin-top:30px;">
      <div class="col-12 ">
        <div id="pro"></div>
      </div>
    </div>
  </div>

  



    <!-- ended cards cide -->
  
    

 


      

 
   
    

    <script>
      
      let product={
      weding:[
        {name:"jaipur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/0H6A1862-1.jpg',''"},
        {name:"goa",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/16-2.jpg',''"},
        {name:"agra",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_4096-1.jpg',''"},
        {name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/0H6A2220-1.jpg',''"},
        {name:"delhi",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/22-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/0H6A1858-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/0H6A2240-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_0584-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/0H6A2261-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/0H6A2288-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_0598-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/0H6A2327-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_0606-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/0H6A2184-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_0654-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_4521-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_2882.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_3152-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_3732-1.jpg',''"},
{name:"jodhpur",img:"'https://www.fnpweddings.com/wp-content/uploads/2023/01/IMG_3035-1.jpg',''"},
      ] , 
    return:"success",
    data:"done",

      }
      console.log(product)
      let data="";
      product.weding.forEach(element =>{
        // console.log(element)

        data+='<div class="card" style="width: 20rem;float:left;margin:10px;height:300px;">'
  +'<img src='+element.img+' class="card-img-top" alt="...">'
  +'<div class="card-body">'
    +'<h4 style="color:red; text-align:center;">'+element.name+'<h4>'
    // +'<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>'
    +'</div>'
    +'</div>'
     
          
      });
      document.getElementById('pro').innerHTML=data;




    


    </script>

  













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>