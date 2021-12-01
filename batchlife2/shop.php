<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel= "stylesheet">
<link href="css/grid.css" type="text/css" rel= "stylesheet">
<link href="css/media.css" type="text/css" rel= "stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Praise&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
<title>Batch Life</title>
</head>

<div class="wrapper">
<body>
    <header>
        <!-- <div class="logo-round"> -->
        <a href="index.php"><img class="logo-round" src="images/batch-logo-round.png" alt="cat in space logo"></a> 
        <!-- </div> -->

        <!-- <div class="logo-batch"> MOBILE LOGO -->
        <a href="index.php"><img class="logo-batch" src="images/batch-life.jpeg" alt="batch life"></a> 
        <!-- </div> -->
        <nav>          
            <ul>
                <li><a href=" index.php " class="current">Home</a></li>
                <li><a href=" about.php ">About</a></li>
                <li><a href=" shop.php ">Shop</a></li>
                <li><a href=" contact.php ">Contact</a></li>
            </ul>
        </nav>
    </header>
<h1>SHOP</h1>
<p>Handmade in Seattle, WA</p>
<main class="shop-main">

<div class="shop category"> <h3>Item Category</h3>
       <a href=""><img class="shop" src="images/stickers.jpg"></a>
       <!--<img class="shop mobile" src="images/misfits-mobile.jpg">-->
 
  <div class="shop item">1</div>
  
  </div> <!--end category-->





</main>



<section class="shop-contact"><h3>Contact Vivian</h3>
</section>


<aside class="shop-aside">
<h3>Follow Batch Life</h3>
<a href="#"> <img class="ig" src="images/ig-logo.svg" alt="Instagram logo"></a>
</aside>

<!--FOOTER START-->
<footer>
<form aria-label="sign up for our newsletter" name="" action="" class="sign-up">
<fieldset>
<h3>Sign Up For Our Newsletter</h3>    
<label for="email" name="email">Email Address</label>
<input type="email" name="email">
<button name="submit">SUBMIT</button>
</fieldset>
</form>


    <ul class="quick-links">
        <li>FAQ</li>
        <li>SHIPPING</li>
        <li>ORDERS &#38; PAYMENTS</li>
        <li>CONTACT</li>
    </ul>

<div class="bottom-links">
    <ul>
        <li>Copyright &copy; 2020-<?=date("Y")?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of use</a></li>
        <li><a href="">Web Design by Kacie</a></li>
        <li><small><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS Validation</a></small></li> 
    </ul>
</div><!--end bottom-links-->

</footer>

<script>
     //https://tinyurl.com/dynamic-html-checker
     document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
</script>
    
</div> <!--END wrapper-->
</body>
</html>