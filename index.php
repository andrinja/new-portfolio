<?php
    $app_mode = 'local';

    if($app_mode == 'local'){
        $root_url = '/';
    }
    else {
        $root_url = '/new-portfolio/';
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/styles.php');?>
</head>
<body>

    <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/drawer.php');?>

   <div class="page-content">
       <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/navigation.php');?>
       <div id="fullpage">
           <div class="section front-page" data-anchor="home">
               <img class="front-image" src="storage/front-page-background.png" alt="">
               <div class="box-item"></div>
               <div class="text-area">
                   <div class="name">ANDRA ZEBERGA</div>
                   <div class="title">Front end developer</div>
                   <div class="sub-title">“Design is not just what it looks like and feels like. Design is how it works.”</div>
                   <div class="buttons">
                       <a class="resume-btn btn" href="pages/resume.php">Resume</a>
                       <a class="project-btn btn" href="#iportalen_page">Projects</a>
                   </div>
               </div>
               <div class="follow-btn">
                   <div class="share-icon icon "><i class="mdi mdi-share-variant mdi-24px"></i></div>
                   <div class="item icon "><a href="https://www.linkedin.com/in/andra-zeberga-4333694a/" target="_blank"><i class="mdi mdi-linkedin mdi-24px"></i></a></div>
                   <div class="item icon "><a href="https://twitter.com/AndrinjaSC2" target="_blank"><i class="mdi mdi-twitter mdi-24px"></i></a></div>
                   <div class="item icon"><a href="https://www.instagram.com/andrinjaa/?hl=en" target="_blank"><i class="mdi mdi-instagram mdi-24px"></i></a></div>
               </div>
               </div>
               <div class="scroll-item">
                   <div class="mouse">
                       <div class="scroll"></div>
                   </div>
               </div>
           </div>

           <!--Project pages -->
           <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/projects/iportalen.php');?>

           <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/projects/teamaktiv.php');?>

           <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/projects/iprezentr.php');?>

           <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/projects/fairtrade.php');?>

           <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/projects/randoms.php');?>

           <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/projects/registration.php');?>


       </div>
   </div>
   <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/script.php');?>
</body>
</html>