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
        <nav class="topnav" id="myTopnav">  
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>        
            <ul>
                <li><a href=" index.php " >Home</a></li>
                <li><a href=" about.php " >About</a></li>
                <li><a href=" shop.php " >Shop</a></li>
                <li><a href=" contact.php ">Contact</a></li>
            </ul>
        </nav>
    </header>
<main class="home-main">
    <p>MAIN    12 12 12 12
iam, quis nostrum exercitationem ullam corporis suscipit laboriosam, iam, quis nostrum exercitationem ullam corposamiam,
 quis nostrum exercitationem ullam corporis suscipit laboriosamiam, quis nostrum exercitationem ullam corporis suscipit 
iam, quis nostrum exercitationem ullam corporis suscipit laboriosamnisi ut aliquid ex ea commodi consequatur?</p>
</main> <!-- END main -->

<section class="home-shop">
  <div class="category"><h3>Stickers</h3>
  <a href=""><img class="desktop" src="images/stickers.jpg"></a>
  <a href=""><img class="mobile" src="images/misfits-mobile.jpg"></a>  
  </div>  

  <div class="category"><h3>Buttons</h3>
  <a href=""><img class="mobile" src="images/buttons-mobile.jpg"></a>        
  <a href=""><img class="desktop" src="images/buttons.jpg"></a>
  </div> 

  <div class="category"><h3>Earrings</h3>
  <a href=""><img class="mobile" src="images/earrings-mobile.jpg"></a>
  <a href=""><img class="desktop" src="images/earrings.jpg"></a>
  </div> 

  <div class="category"><h3>Prints</h3>
  <a href=""><img class="mobile" src="images/misfits-mobile.jpg"></a>    
  <a href=""><img class="desktop" src="images/stickers.jpg"></a>
  </div> 

  <div class="category"><h3>Pornaments</h3>
  <a href=""><img class="mobile" src="images/misfits-mobile.jpg"></a>  
  <a href=""><img class="desktop" src="images/pornaments.jpg"></a>
  </div> 

  <div class="category"><h3>Shirts &#38; Bags</h3>
  <a href=""><img class="mobile" src="images/shirts-mobile.jpg"></a>   
  <a href=""><img class="desktop" src="images/shirts.jpg"></a>
  </div> 
</section>

<section class="home-about"><h3>About Batch Life</h3>
<p>Batch Life (Established 20XX) is owned and operated by Vivian Crane-Conant, a local artist and Seattle native. 
What started as a playful pet name amongst friends (“Batch”) quickly turned into a lifestyle. 
After years of making unique jewelry and art for herself, friends, and family, Vivian decided to open up a small business 
selling her wares to other "Batches".</p>
</section>

<section class="home-contact"><h3>Contact Vivian</h3>
</section>


<aside class="home-aside">
<h3>Follow Batch Life</h3>
<img id="test" src="images/instagram-feed.jpg">
<a href="#"> <img class="ig" src="images/ig-logo.svg" alt="Instagram logo"></a>
</aside>

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
    </ul>
</div><!--end bottom-links-->
<span id="validation"><small><a id="html-checker" href="#">HTML Validation</a><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS Validation</a></small></span>
</footer>

<script>
     //https://tinyurl.com/dynamic-html-checker
     document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  

     function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += "responsive";
        } else {
            x.className = "topnav";
        }
    } 

</script>

    
</div> <!--END wrapper-->
</body>
</html>