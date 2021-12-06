<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['shop.php'] = 'Shop';
$nav['contact.php'] = 'Contact';


function my_nav($nav) {
$my_return = '';
foreach($nav as  $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '
<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';    
} else {
    $my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>'; 
} // end else
} // end foreach 
return $my_return;
} // end my_nav

switch(THIS_PAGE) {
    case 'index.php'; 
    $title = 'Batch Life';
    $body = 'home';
    $headline = 'Designs For The Everyday Unicorn';
    break;

    case 'about.php'; 
    $title = 'About Batch Life';
    $body = 'about inner';
    $headline = 'About Vivian';
    break;

    case 'shop.php'; 
    $title = 'Shop Batch Life';
    $body = 'daily inner';
    $headline = 'Handmade in West Seattle';
    break;

    case 'contact.php'; 
    $title = 'Contact Batch Life';
    $body = '';
    $headline = 'Contact Vivian';
    break;
}



//this is beggining of switch for HW3
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}


// emailable form php START

$first_name = '';
$last_name = '';
$email = '';
$comments = '';


$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$comments_Err = '';

//<ul>
            //<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
               //<?php echo my_nav($nav);
           // </ul>


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['first_name'])) {
        $first_name_Err = 'To whom are we sending this cheese?';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please provide your Last name';
        unset($_POST['last_name']);
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please provide your email';
        unset($_POST['email']);
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['preference'])) {
        $preference_Err = 'What style of cheese do you prefer?';
    } else {
        $preference = $_POST['preference'];
    }

    if(empty($_POST['cheese'])) {
        $cheese_Err = 'Please select your cheeses';
    } else {
        $cheese = $_POST['cheese'];
    }

    if($_POST['country'] == NULL) {
        $country_Err = 'Please select your country';
    } else {
        $country = $_POST['country'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please tell us your secrets';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['policy'])) {
        $policy_Err = 'You must agree to our terms';
    } else {
        $policy = $_POST['policy'];
    }

    // phone number
    if(empty($_POST['phone'])) {  
        $phone_Err = 'We require a valid phone number!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { 
        $phone_Err = 'Invalid format!';
        unset($_POST['phone']);
        } else{
        $phone = $_POST['phone'];
        }
        }

// cheese function

  function cheese_time() {
     $my_return = '';
     if(!empty($_POST['cheese'])) {
         $my_return = implode(', ', $_POST['cheese']); 
     } 
     return $my_return;  
    
    } // close function cheese_time()


    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['preference'],
        $_POST['cheese'],
        $_POST['country'],
        $_POST['comments'],
        $_POST['last_name'],
        $_POST['policy'] 
        
        )) { 
            
        $to = 'admin@kaciecodes.com';
        $subject = 'Test Email' .date('m/d/y') ;
        $body = '
        First name: '.$first_name.' '.PHP_EOL.'
        Last name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Preference: '.$preference.' '.PHP_EOL.'
        Cheese: '.cheese_time().' '.PHP_EOL.'
        Country: '.$country.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';
            
        $headers = array(
        'From' => 'noreply@kaciecodes.com',
        'Relpy-to' => ''.$email.'',
        );
            
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        }   


} // end server request method



// end emailable form php


// random images

function random_pics() {

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$pic = ''.$photos[$i].'.jpg';
$random_pic = '<img class="random" src="images/'.$pic.'" alt="'.$photos[$i].'">';
return $random_pic;

} // end random images



// random CHEESE images for contact.php

function cheese_pics() {

    $photos[0] = 'cheeseboard';
    $photos[1] = 'CheeseGrapesWineglasses';
    $photos[2] = 'cow-sheep-goat';
    $photos[3] = 'french-cheese';
    
    $i = rand(0, 3);
    
    $pic = ''.$photos[$i].'.jpeg';
    $cheese_pic = '<img class="random" src="images/'.$pic.'" alt="'.$photos[$i].'">';
    return $cheese_pic;
    
    } // end random cheese mages


//-------------FROM WK 8 CONFIG------------
    function myError($myFile, $myLine, $errorMsg)
    {
    if(defined('DEBUG') && DEBUG)
    {
     echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
          echo 'Error message: <b> '.$errorMsg.'</b>';
          die();
      }  else {
          echo ' Houston, we have a problem!';
          die();
      }
             
    }
//--------------FROM WK 8 CONFIG-------------    

?>