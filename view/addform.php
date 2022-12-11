

<?php
include 'model/tour.php';


$obj = new tour();
if (isset($_POST['submit'])){

    $country = $_POST["country"];
    $price = $_POST["price"];
    $duration = $_POST["duration"];
    $image = $_FILES["image"];


    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"]; 
    
    $obj->insertion($country,$price,$duration,$fileName,$tmpName);
    header("location:index.php?action=board");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style.css">
    <title>Document</title>
</head>
<style>
html {
    background: url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
    background-size: cover;
    height: 100%;
}

#feedback-page {
    text-align: center;
}

#form-main {
    width: 100%;
    float: left;
    padding-top: 100px;
}

#form-div {
    background-color: rgba(72, 72, 72, 0.4);
    padding-left: 35px;
    padding-right: 35px;
    padding-top: 35px;
    padding-bottom: 50px;
    width: 450px;
    float: left;
    left: 50%;
    position: absolute;
    margin-top: 30px;
    margin-left: -260px;
    -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
}

.feedback-input {
    color: #3c3c3c;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 500;
    font-size: 18px;
    border-radius: 0;
    line-height: 22px;
    background-color: #fbfbfb;
    padding: 13px 13px 13px 54px;
    margin-bottom: 10px;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    border: 3px solid rgba(0, 0, 0, 0);
}

.feedback-input:focus {
    background: #fff;
    box-shadow: 0;
    border: 3px solid #3498db;
    color: #3498db;
    outline: none;
    padding: 13px 13px 13px 54px;
}

.focused {
    color: #30aed6;
    border: #30aed6 solid 3px;
}





#button-blue {
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
    float: left;
    width: 100%;
    border: #fbfbfb solid 4px;
    cursor: pointer;
    background-color: #3498db;
    color: white;
    font-size: 24px;
    padding-top: 22px;
    padding-bottom: 22px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    margin-top: -4px;
    font-weight: 700;
}

#button-blue:hover {
    background-color: rgba(0, 0, 0, 0);
    color: #0493bd;
}

.submit:hover {
    color: #3498db;
}

.ease {
    width: 0px;
    height: 74px;
    background-color: #fbfbfb;
    -webkit-transition: .3s ease;
    -moz-transition: .3s ease;
    -o-transition: .3s ease;
    -ms-transition: .3s ease;
    transition: .3s ease;
}

.submit:hover .ease {
    width: 100%;
    background-color: white;
}

@media only screen and (max-width: 580px) {
    #form-div {
        left: 3%;
        margin-right: 3%;
        width: 88%;
        margin-left: 0;
        padding-left: 3%;
        padding-right: 3%;
    }
}
</style>

<body>
<header>
		<a href="#" class="logo">traviGO</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
        <li><a href="index.php">Home</a></li>
			<li><a href="index.php?action=tour">Tours</a></li>
			<li><a href="index.php?action=about">About</a></li>
			<li><a href="index.php?action=contact">Contact Us</a></li>
            <li><a href="index.php?action=board">Dashboard</a></li>
			<li><a href="index.php?action=login">Login</a></li>
		</ul>
	</header>

    <div id="form-main">
        <div id="form-div">
            <form action="" method="POST" enctype="multipart/form-data"  class="form" id="form1">

                <p class="name">
                    <input name="country" type="text"
                        class="feedback-input" placeholder="country"
                        />
                </p>

                <p class="pays">
                    <input name="price" type="number" class="feedback-input"
                        placeholder="price" />
                </p>

                <p class="pays">
                    <input name="duration" type="text" class="feedback-input"
                        placeholder="duration" />
                </p>

                <p class="Pays">
                    <input name="image" type="file"
                        class="feedback-input" placeholder="image" />
                </p>


                <div class="submit">
                    <input type="submit" name="submit" value="submit" id="button-blue" />
                    <div class="ease"></div>
                </div>
                <a href="index.php?action=board"><div class="submit" style="width:120px; margin-top:20px;">
                    <input type="button" value="back" id="button-blue" />
                    <div class="ease"></div>
                </div></a>
            </form>
        </div>
</body>
	<script type="text/javascript" src="view/js/login.js"></script>
<script type="text/javascript" src="view/js/script.js"></script>

</html>