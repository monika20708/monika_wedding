<?php include 'db.php';
if(isset($_POST['submit'])){


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select *from wedding_Dictionary where name='$name'and email='$email'and password='$password'";
$result= $conn->query($sql);
if($result==true){
   // echo 'login';
    $row= $result->fetch_assoc();
    // $id=$row['name'];
    session_start();
    $_SESSION['id']=$name;
   header("location:index.php");
// echo $row['name'];
   
}
else{
    echo 'not login';
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #dc35455c;
}

.card {
    border: none;
    border-radius: 0;
    width: 420px !important;
    margin: 0 auto;
    background-color:#ffffff;
}

.signup {
    display: flex;
    flex-flow: column;
    justify-content: center;
    padding: 10px 50px
}

a{
    text-decoration:none !important;
}

h5 {
    color: #ff0147;
    margin-bottom: 3px;
    font-weight: bold
}

small {
    color: rgba(0, 0, 0, 0.3)
}

input {
    width: 100%;
    display: block;
    margin-bottom: 7px
}

.form-control {
    border: 1px solid #dc354575;
    border-radius: 30px;
    background-color: rgba(0, 0, 0, .075);
    letter-spacing: 1px
}

.form-control:focus {
    border: 0.5px solid #dc354575;
    border-radius: 30px;
    box-shadow: none;
    background-color: rgba(0, 0, 0, .075);
    color: #000;
    letter-spacing: 1px
}

.btn {
    display: block;
    width: 100%;
    border-radius: 30px;
    border: none;
    background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%);
    background: -webkit-linear-gradient(left, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%)
}

.text-left {
    color: rgba(0, 0, 0, 0.3);
    font-weight: 400
}

.text-right {
    color: #ff0147;
    font-weight: bold
}

span.text-center {
    color: rgba(0, 0, 0, 0.3)
}

.fab {
    padding: 15px;
    font-size: 23px
}

.fa-facebook {
    color: #0303d9bf
}

.fa-twitter {
    color: #0078fade
}

.fa-linkedin {
    color: #18b1c0
}</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto py-4 px-0">
 <div class="card p-0">
                <div class="card-title text-center">
                    <h5 class="mt-5">HEY, THERE</h5> <small class="para">Login to your cool account below.</small>
                </div>
                <form class="signup"  action="" method="POST">
                    <div class="form-group"><input type="text" class="form-control" name="name" placeholder="Username"></div>
                    <div class="form-group"><input type="email" class="form-control" name="email" placeholder="email"></div>
                    <div class="form-group"><input type="password" class="form-control" name="password" placeholder="password"></div>
                     <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <a href="#"><p class="text-left pt-2 ml-1">Forgot password?</p></a>
                        </div>
                        <div class="col-6 col-sm-6">
                           <a href="#"> <p class="text-right pt-2 mr-1">Sign Up Now</p></a>
                        </div>
                    </div> <span class="text-center">Or</span> <span class="text-center pt-3">Login Using</span>
                    <div class="row">
                        <div class="d-flex mx-auto pt-1 pb-3"> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin"></i></a> </div>
                    </div>
                </form>
            </div>
        </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>  
</body>
</html>