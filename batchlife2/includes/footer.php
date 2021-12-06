<footer> 
<form action="<?php ;?>" method="post" class="sign-up">
<fieldset>
<h3>Sign Up For Our Newsletter</h3>    
<label for="email">Email Address</label>
<input type="email" name="email">
<button name="submit">SUBMIT</button>
</fieldset>
</form>

    <ul class="quick-links">
        <li><a href="">FAQ</a></li>
        <li><a href="">SHIPPING</a></li>
        <li><a href="">ORDERS &#38; PAYMENTS</a></li>
        <li><a href="">CONTACT</a></li>
    </ul>


    <ul class="bottom-links">
        <li>Copyright &copy; 2020-<?=date("Y")?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of use</a></li>
        <li><a href="">Web Design by Kacie</a></li>
        <li><small><a id="html-checker" href="#">HTML&nbsp;Validation</a>&nbsp;~&nbsp;<a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS&nbsp;Validation</a></small></li>
    </ul>

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
    
</body>
</html>