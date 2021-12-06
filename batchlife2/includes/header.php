<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel= "stylesheet">
<link href="css/grid.css" type="text/css" rel= "stylesheet">
<link href="css/media.css" type="text/css" rel= "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
<title><?php echo $title; ?></title>
</head>

<body>
<div class="wrapper">
<!-- <body> -->
    <header>
        <!--LOGOS--->
        <a href="index.php"><img class="logo desktop-tablet" src="images/batch-logo-round.png" alt="cat in space logo"></a> 
        <a href="index.php"><img class="logo mobile" src="images/batch-life.jpeg" alt="batch life"></a> 
        <nav class="topnav" id="myTopnav">  

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>        
            <ul>
            <?php echo my_nav($nav);?>
            </ul>
        </nav>
    </header>        <!---------------HEADER END--------------->