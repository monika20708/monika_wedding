<?php   include 'db.php';
 if(isset($_POST['submit'])){

 
 $name=$_POST['name'];
  $phone=$_POST['phone'];
  $Event=$_POST['Event'];
  $date=$_POST['date'];
  $Location=$_POST['Location'];
  $lacs=$_POST['lacs'];
  $email=$_POST['email'];
  $passwors=$_POST['password'];
  $tell=$_POST['tell'];

  $sql = "insert into  wedding_Dictionary(name,phone,Event,date,Location,lacs,email,password,tell)
  values('$name','$phone','$Event','$date','$Location','$lacs','$email','$passwors','$tell')";
  
   echo $sql;
  if($conn->query($sql)==true){
    // echo "insert";
    header('Location:http://localhost/wedding/login.php');
  }
  else{
     echo "not insert";
  }
 }

 ?>








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
<button type="submit" name="submit" class="submit">submit</button></div></form></div>
<p><a href="login.php">already have a account</a></p>
</div>


    <style>
        .form-img{
        background-image: url('img/light-bulb-bokeh-photography-wallpaper-thumb.jpg');
    }
    .div-box{
        width: 50%;
        height: 250px;
        background-color: red;
    }

    #form-box{
        width: 100%;
        height: 90px;
        background-image: url('/img/light-bulb-bokeh-photography-wallpaper-thumb.jpg');
        /* background-repeat: no-repeat; */
    }
    .form-box{
        width: 66%;
        height: 573px;
        padding: 15px;
        background-color: lightgray;
        margin-top: -65px;
        
    box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
        0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
        margin-left :183px;
    }
    .name{
        
            width: 41%;
            height: 59px;
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
            border: 2px #00000019 solid;
            border-radius: 12px;
            margin-bottom: 10px;
        }

    .phona{
        width: 41%;
        height: 59px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
        border: 2px #00000019 solid;
        border-radius: 12px;
        margin-bottom: 10px;
        margin: 10px 10px 10px 43px;   
    }
    .Event{
        width: 41%;
        height: 59px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
        border: 2px #00000019 solid;
        border-radius: 12px;
        margin-bottom: 10px;
        margin: 10px 10px 10px -2px;   
    }
    .data{
        width: 41%;
        height: 59px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
        border: 2px #00000019 solid;
        border-radius: 12px;
        margin-bottom: 10px;
        margin: 10px 10px 10px 31px;   
    }
    .Event{
        width: 41%;
        height: 59px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
        border: 2px #00000019 solid;
        border-radius: 12px;
        margin-bottom: 10px;
        margin: 10px 10px 10px -2px;   
    }  

    .Location{
        width: 41%;
        height: 59px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
        border: 2px #00000019 solid;
        border-radius: 12px;
        margin-bottom: 10px;
        margin: 10px 10px 10px -2px;   
    }
    .BudgetRange{
        width: 41%;
        height: 59px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
        border: 2px #00000019 solid;
        border-radius: 12px;
        margin-bottom: 10px;
        margin: 10px 10px 10px 31px;   
    }
    .emali{
        width: 90%;
        height: 55px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
        border: 2px #00000019 solid;
        border-radius: 12px;
        margin-bottom: 10px;
    }
    .Tell{
        width: 90%;
        height: 55px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 3%);
        border: 2px #00000019 solid;
        border-radius: 12px;
        margin-bottom: 10px;   
    }
    .submit{
        width: 30%;
        height: 50px;
        text-align: center;
        background-color: green;
        color: white;
        margin: 10px 10px 10px 215px;
    }
    .submit:hover{
        background-color: rgb(144, 238, 144);
        color: rgb(18, 17, 17);
    }
    div a{
        text-decoration: none;
        
    }


    </style>