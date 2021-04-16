<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Shop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="F:\my web development project\Aaaaaaa567.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-utensils"></i> food shop </a>

    <h3 class="call"> <i class="fas fa-phone"></i> call now : 01862330950</h3>

</div>

<div class="header-2">

    <div id="menu" class="fas fa-hamburger"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#dish">dishes</a></li>
            <li><a href="#chef">chef</a></li>
            <li><a href="#speciality">speciality</a></li>
            <li><a href="#order">order</a></li>
        </ul>
    </nav>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-twitter"></a>
    </div>

</div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>welcome To <span>Food</span> Shop</h1>
    <p>We try to best service to the customer. Let's get explore the food shop</p>
    <a href="#"><button class="btn">get started</button></a>
</div>

<div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span> about us </span> </h1>

<div class="row">

    <div class="content">
        <h3>lets satisfy your hunger with our tasty dishes</h3>
        <p>We always do our best service to the customer
that’s why we hope and always focused on every ages people
from child to old man with their favorite and healthy food. We want
to service 64 district in Bangladesh through online. So for the
hungry peoples and food lover peoples get find their best and
favorite food in our food-shop. They will go through the website
and they could order menu.</p>
        <p>. As you can see from this online
ordering process overview, there are a lot of benefits that come
from offering ordering in this manner for our customers.!</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

    <div class="image">
	<?php
	$imgurl="food1.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- dish section starts  -->

<section class="dish" id="dish">

<h1 class="heading"> <span> popular dishes </span> </h1>

<ul class="controls">
    <li class="buttons button-active" data-filter="all">all</li>
    <li class="buttons" data-filter="sandwich">sandwich</li>
    <li class="buttons" data-filter="cake">cake</li>
    <li class="buttons" data-filter="juice">juice</li>
    <li class="buttons" data-filter="chocolate">chocolate</li>
</ul>

<div class="image-container">

    <div class="image sandwich">
	<?php
	$imgurl="sandwich1.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
		<?php
	$imgurl="sandwich2.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
		<?php
	$imgurl="sandwich3.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">sandwich</a>
    </div>

    <div class="image cake">
		<?php
	$imgurl="cake1.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">cake</a>
    </div>
    <div class="image cake">
		<?php
	$imgurl="cake2.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">cake</a>
    </div>
    <div class="image cake">
		<?php
	$imgurl="cake3.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">cake</a>
    </div>

    <div class="image juice">
	<?php
	$imgurl="juice1.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">juice</a>
    </div>
    <div class="image juice">
	<?php
	$imgurl="juice2.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">juice</a>
    </div>

    <div class="image chocolate">
	<?php
	$imgurl="chocolate.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <a href="#">chocolate</a>
    </div>

</div>

</section>

<!-- dish section ends -->

<!-- chef section starts  -->

<section class="chef" id="chef">

<h1 class="heading"> <span> expert chefs </span> </h1>

<div class="box-container">

    <div class="box">
	<?php
	$imgurl="chef1.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
	<?php
	$imgurl="chef2.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
	<?php
	$imgurl="chef3.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
	<?php
	$imgurl="chef4.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

</div>

</section>

<!-- chef section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

<h1 class="heading"> <span> our speciality </span> </h1>

<div class="box-container">

    <div class="box">
	<?php
	$imgurl="img1.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <div class="info">
            <h3>tasty hamburger</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
	<?php
	$imgurl="img2.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <div class="info">
            <h3>fresh bearkfast</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
	<?php
	$imgurl="img3.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <div class="info">
            <h3>veg sandwich</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
	<?php
	$imgurl="img4.jpg";
	?>
	<img src="<?=$imgurl; ?>"/>
        <div class="info">
            <h3>delicious pizza</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>Our food delivery system always fast and to doorstep.</p>
    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <h3>heavy discounts</h3>
        <p>Here is lucky coupon draw and every week always surprise discount.</p>
    </div>

    <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>money returns</h3>
        <p>If there is any system problem we return the money.</p>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <h3>24 x 7 support</h3>
        <p>Our agent is best agent to help and serve the customer. We are here 24 hours support in whole 7days .</p>
    </div>

</div>

</section>

<!-- speciality section ends -->

<!-- order section starts  -->

<section class="order" id="order">

<h1 class="heading"> <span> order now </span> </h1>

<form action="">

    <div class="inputBox">
        <input type="text" placeholder="full name">
        <input type="text" placeholder="food name">
    </div>

    <div class="inputBox">
        <input type="number" placeholder="phone number">
        <select name="" id="">
            <option value="food type" disabled selected>food type</option>
            <option value="veg">veg</option>
            <option value="non-veg">non-veg</option>
        </select>
    </div>

    <div class="inputBox">
        <textarea cols="30" rows="10" placeholder="full address"></textarea>
        <iframe id="map" src="https://www.google.com/maps/place/Dhaka/@23.8098291,90.4197913,16z/data=!4m13!1m7!3m6!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!2sDhaka!3b1!8m2!3d23.810332!4d90.4125181!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.810332!4d90.4125181" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <input type="submit" value="order now" class="btn" >

</form>

</section>

<!-- order section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h1>newsletter</h1>
    <p>subscribe for latest updates</p>    
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <img src="images/shape-top.png" alt="">

    <div class="box-container">

        <div class="box">
            <h3 class="heading"> <span>why choose us?</span> </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus iste unde reprehenderit vitae consequatur incidunt totam aperiam culpa. Repellat, fugiat?</p>
        </div>

        <div class="box">
            <h3 class="heading"> <span>locations</span> </h3>
            <a href="#">Bangladesh</a>
            
        </div>

        <div class="box">
            <h3 class="heading"> <span>quick links</span> </h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">dishes</a>
            <a href="#">chef</a>
            <a href="#">speciality</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>contact us</span> </h3>
            <p> <i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh 4400 </p>
            <p> <i class="fas fa-envelope"></i> junichakma65@gmail.com </p>
            <p> <i class="fas fa-globe"></i> www.youtube.com </p>
        </div>

	</div>
	<h1 class="credit"> created by <span> Food Shop</span> | all rights reserved! </h1>
	<div class="juni"><h2><a href="logout.php">Logout</a></h2></div>



</section>

<!-- footer section ends -->


















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="F:\my web development project\Aaadjhd567.js"></script>
<!--INSERT INTO `project` (`name`, `phone`, `full address`, `food name`, `food type`) VALUES ('testname', '99999999', 'khagrachari chitaagong bangladesh', 'pizza', 'non -veg');-->
<div>
    <ul class="dropdown-menu">
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>

</body>
</html>


<style type="text/css">


@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap');

:root{
    --red:#e84118;
}

*{
    font-family: 'Open Sans', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    text-transform: capitalize;
    transition: all .2s cubic-bezier(.37,1.14,.26,1.24);
}

*::selection{
    background:var(--red);
    color:#fff;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

.btn{
    height:5rem;
    width: 18rem;
    color:#fff;
    border:.2rem solid #fff;
    outline:.2rem solid #fff;
    outline-offset: -.8rem;
    font-size: 2rem;
    margin:1.5rem 0;
    cursor: pointer;
    background:none;
}

.btn:hover{
    outline-offset: .4rem;
    background:var(--red);
}

.heading{
    text-align: center;
    width: 90%;
    margin:0 auto;
    padding:0 .5rem;
    padding-top: 6rem;
    box-shadow: 0 .2rem .05rem rgba(0,0,0,.3);
}

.heading span{
    display: inline-block;
    font-size: 3.5rem;
    color:var(--red);
    padding:1rem 0;
    box-shadow: 0 .2rem .05rem var(--red);
}

header .header-1{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    background-color: #fff;
    padding:1rem 2rem;
}

header .header-1 .logo{
    font-size: 2.5rem;
    color:var(--red);
}

header .header-1 .call{
    font-size: 2rem;
    color:#666;
}

header .header-2{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    background:var(--red);
    padding:.5rem;
    position: relative;
    z-index: 1000;
}

header .header-2 .navbar ul{
    display: flex;
    align-items: center;
    justify-content: space-between;
    list-style: none;
}

header .header-2 .navbar ul li{
    margin:1rem;
}

header .header-2 .navbar ul li a{
    font-size: 2rem;
    color:#fff;
}

header .header-2 .navbar ul li a.active,
header .header-2 .navbar ul li a:hover{
    color:#ff0;
}

header .header-2 .share a{
    font-size: 2rem;
    color:#fff;
    margin:1rem;
}

header .header-2 .share a:hover{
    color:#ff0;
}

header .header-2 #menu{
    font-size: 3rem;
    color:#fff;
    cursor: pointer;
    display: none;
    margin:1rem;
}

header .header-2.header-active{
    position: fixed;
    top:0; left: 0;
    box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
}


.home{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background:url(bg.jpg);
    background-size: cover;
    background-position: center;
    position: relative;
}

.home .content{
    text-align: center;
    padding:1rem;
}

.home .content h1{
    font-size: 6rem;
    color:#fff;
}

.home .content h1 span{
    color:var(--red);
}

.home .content p{
    font-size: 2rem;
    color:#fff;
    width: 68rem;
    padding:1rem 0;
}

.home .shape{
    position: absolute;
    bottom:-.5rem; left: 0;
    height: 13rem;
    background:url(shape-bottom.png);
    background-size: 350rem 13rem;
    width: 100%;
    animation: animate 25s linear infinite;
}

@keyframes animate{
    0%{
        background-position-x: 0;
    }
    100%{
        background-position-x: 350rem;
    }
}

.about{
    min-height: 100vh;
}

.about .row{
    display: flex;
    align-items: center;
    justify-content: center;
    padding:0 2rem;
    overflow-x: hidden;
}

.about .row .image img{
    width: 30rem;
    filter: drop-shadow(.5rem .5rem .5rem rgba(0,0,0,.3));
}

.about .row .content{
    padding:1rem;
}

.about .row .content h3{
    font-size: 3.5rem;
    color:var(--red);
}

.about .row .content p{
    font-size: 2rem;
    color:#666;
    padding:1rem 0;
}

.about .row .content .btn{
    color:var(--red);
    border-color: var(--red);
    outline-color: var(--red);
}

.about .row .content .btn:hover{
    color:#fff;
}

.dish{
    min-height: 100vh;
}

.dish .controls{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
    list-style: none;
}

.dish .controls .buttons{
    margin:1rem 2rem;
    padding:.5rem 0;
    border-bottom:.2rem solid #333;
    color:#333;
    cursor: pointer;
    font-size: 2rem;
}

.dish .controls .buttons.button-active,
.dish .controls .buttons:hover{
    color:var(--red);
    border-color: var(--red);
}

.dish .image-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding-bottom: 2rem;
}

.dish .image-container .image{
    width: 35rem;
    margin:2rem;
    border:1rem solid #fff;
    box-shadow: 0 .5rem .5rem rgba(0,0,0,.3);
}

.dish .image-container .image img{
    height: 20rem;
    width: 100%;
    object-fit: cover;
}

.dish .image-container .image a{
    font-size: 2rem;
    color:#333;
    padding:.5rem;
}

.dish .image-container .image a:hover{
    color:var(--red);
    text-decoration: underline;
}

.chef{
    min-height: 100vh;
    background:url(chefs-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

.chef .heading span{
    color:#000;
}

.chef .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
}

.chef .box-container .box{
    height: 40rem;
    width: 28rem;
    margin:2rem;
    border:.5rem solid var(--red);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.3);
    position: relative;
    overflow: hidden;
}

.chef .box-container .box img{
    height:100%;
    width:100%;
    object-fit: cover;
}

.chef .box-container .box .info{
    position: absolute;
    bottom:-6rem; left: 0;
    width: 100%;
    background:#fff;
    border-top:.5rem solid var(--red);
    text-align: center;
}

.chef .box-container .box:hover .info{
    bottom:0rem;
}

.chef .box-container .box .info h3{
    font-size: 2rem;
    color:#333;
    padding:.5rem 0;
}

.chef .box-container .box .info span{
    font-size: 1.5rem;
    color:#666;
}

.chef .box-container .box .info .share{
    margin-top: 1rem;
    border-top: .1rem solid rgba(0,0,0,.3);
    padding:1rem 0;
}

.chef .box-container .box .info .share a{
    font-size: 2rem;
    margin:1rem;
    color:var(--red);
}

.chef .box-container .box .info .share a:hover{
    color:#333;
}

.speciality .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
}

.speciality .box-container .box{
    height:20rem;
    flex:1 1 43rem;
    margin:1rem;
    box-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
    border-radius: 1rem;
    overflow: hidden;
    position: relative;
}

.speciality .box-container .box img{
    height:100%;
    width:100%;
    object-fit: cover;
}

.speciality .box-container .box .info{
    position: absolute;
    top:50%; left: 5%;
    transform: translateY(-50%);
}

.speciality .box-container .box .info h3{
    font-size: 3rem;
    color:#fff;
}

.speciality .box-container .box .info p{
    font-size: 2rem;
    color:#eee;
}

.speciality .icons-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding-bottom: 3rem;
}

.speciality .icons-container .icons{
    margin:2rem;
    width: 29rem;
    text-align: center;
}
.dropdown-menu{
	font-size: x-large;
	background-color:red;
}

.speciality .icons-container .icons i{
    font-size: 4rem;
    color:var(--red);
}

.speciality .icons-container .icons h3{
    font-size: 2rem;
    color:#333;
    padding:1rem 0;
}

.speciality .icons-container .icons p{
    font-size: 1.5rem;
    color:#666;
}

.order{
    min-height: 100vh;
    background:url(order-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    padding-bottom: 2rem;
}

.order .heading span{
    color:#fff;
}

.order form{
    border-radius: 1rem;
    background:#fff;
    width: 85%;
    margin:2rem auto;
    padding:2rem;
    box-shadow: 0 .5rem 1rem #000;
    text-align: center;
}

.order form .inputBox{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.order form .inputBox input,
.order form .inputBox select,
.order form .inputBox textarea{
    padding:0 1rem;
    font-size: 1.7rem;
    color:#333;
    height:4rem;
    width:49%;
    margin:1rem 0;
    border:.1rem solid #333;
}

.order form .inputBox input:focus,
.order form .inputBox select:focus,
.order form .inputBox textarea:focus{
    border:.2rem solid var(--red);
}

.order form .inputBox textarea{
    height:20rem;
    padding:1rem;
    resize: none;
}

.order form .inputBox #map{
    height:20rem;
    margin:1rem 0;
    width: 49%;
}

.order form .btn{
    color:var(--red);
    border-color: var(--red);
    outline-color: var(--red);
}

.order form .btn:hover{
    color:#fff;
}

.newsletter{
    padding:2rem 1rem;
    background: linear-gradient(rgba(255,255,255,.5),#fff), url(letter.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
}

.newsletter h1{
    font-size: 4rem;
    color:#333;
}

.newsletter p{
    font-size: 2rem;
    color:#333;
}

.newsletter form{
    margin:1rem auto;
    padding:.5rem 1rem;
    max-width: 60rem;
    border-radius: 5rem;
    box-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
    display: flex;
    align-items: center;
    background:#fff;
}

.newsletter form input[type="email"]{
    height:4rem;
    padding:0 1rem;
    width:100%;
    font-size: 1.7rem;
    background:none;
    border:none;
    color:#333;
}

.newsletter form input[type="submit"]{
    height:3.8rem;
    width:17rem;
    font-size: 1.7rem;
    background:var(--red);
    border:none;
    outline: none;
    color:#fff;
    cursor: pointer;
    border-radius: 5rem;
}

.newsletter form input[type="submit"]:hover{
    letter-spacing: .1rem;
    opacity: .8;
}

.footer{
    background:#2c3e50;
}

.footer img{
    width: 100%;
}

.footer .box-container{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.footer .box-container .box{
    flex:1 1 23rem;
    margin:2rem;
}

.footer .box-container .box .heading{
    margin:0; padding:0;
    box-shadow: 0 .2rem .05rem #fff6;
    margin-bottom: .5rem;
    text-align: left;
}

.footer .box-container .box .heading span{
    font-size: 2.5rem;
    color:#fff;
}

.footer .box-container .box p{
    font-size: 1.7rem;
    color:#eee;
    padding:1rem 0;
}

.footer .box-container .box:first-child p{
    font-size: 1.4rem;
}

.footer .box-container .box p i{
    padding:0 .5rem;
    color:#fff;
}

.footer .box-container .box a{
    font-size: 1.7rem;
    display: block;
    padding:.5rem 0;
    color:#eee;
}
.juni{
	color:white;
}

.footer .box-container .box a:hover{
    text-decoration: underline;
}

.footer .credit{
    font-size: 2rem;
    text-align: center;
    padding:2rem 1rem;
    color:#fff;
    border-top: .1rem solid rgba(255,255,255,.3);
}

.footer .credit span{
    color:var(--red);
}



















/* media queries  */

@media (max-width:768px){

    html{
        font-size: 55%;
    }

    header .header-2 #menu{
        display: block;
    }

    header .header-2 .navbar{
        position: absolute;
        top:100%; left: -120%;
    }

    header .header-2 .navbar ul{
        flex-flow: column;
        justify-content: center;
        min-height: calc(100vh - 6rem);
        padding-bottom: 6rem;
        background:#000;
        width: 32rem;
    }

    header .header-2 .navbar ul li{
        width: 100%;
        text-align: center;
    }

    header .header-2 .navbar ul li a{
        font-size: 2.7rem;
        display: block;
    }

    header .header-2 .fa-times{
        transform: rotate(180deg);
    }

    header .header-2 .nav-toggle{
        left:0;
    }

    .home .content h1{
        font-size: 5rem;
    }

    .home .content p{
        width: auto;
    }

    .about .row{
        flex-flow: column;
    }

    .about .row .image img{
        width: 85%;
    }

}

@media (max-width:600px){

    .order form .inputBox input,
    .order form .inputBox select,
    .order form .inputBox textarea,
    .order form .inputBox #map{
        width: 100%;
    }

}

@media (max-width:400px){

    html{
        font-size: 50%;
    }

    header .header-1{
        flex-flow: column;
    }

    header .header-1 .logo{
        padding-bottom: 1rem;
    }

    header .header-2 .navbar ul{
        width: 100vw;
    }

    .order form{
        width: 95%;
	}
	
}

}
style.txt
Displaying style.txt.

</style>
<script type="text/javascript">
$(document).ready(function(){

$('#menu').click(function(){
	$(this).toggleClass('fa-times');
	$('.navbar').toggleClass('nav-toggle');
});

$(window).on('load scroll',function(){

	$('#menu').removeClass('fa-times');
	$('.navbar').removeClass('nav-toggle');

	if($(window).scrollTop() > 60){
		$('header .header-2').addClass('header-active');
	}else{
		$('header .header-2').removeClass('header-active');
	}

	$('section').each(function(){$

		let height = $(this).height();
		let offset = $(this).offset().top - 200;
		let top = $(window).scrollTop();
		let id = $(this).attr('id');

		if(top >= offset && top < offset + height){
			$('.navbar ul li a').removeClass('active');
			$('.navbar').find(`[href="#${id}"]`).addClass('active');
		}

	});

});

$('.controls .buttons').click(function(){

	$(this).addClass('button-active').siblings().removeClass('button-active');

	let filter = $(this).attr('data-filter');
	if(filter == 'all'){
		$('.dish .image').show(400);
	}else{
		$('.dish .image').not('.'+filter).hide(200);
		$('.dish .image').filter('.'+filter).show(400);
	}

});

});
</script>