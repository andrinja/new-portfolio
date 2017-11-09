<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/styles.php');?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/drawer.php');?>
   <div class="page-content">
       <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/navigation.php');?>
       <div id="fullpage">
           <div class="section front-page">
               <img class="front-image" src="storage/front-page-background.png" alt="">
               <div class="box-item"></div>
               <div class="text-area">
                   <div class="name">Testing</div>
                   <div class="title">Front end developer</div>
                   <div class="sub-title">“Design is not just what it looks like and feels like. Design is how it works.”</div>
                   <div class="buttons">
                       <a class="resume-btn btn" href="pages/resume.php">Resume</a>
                       <a class="project-btn btn" href="">Projects</a>
                   </div>
               </div>
               <div class="scroll-item">
                   <div class="mouse">
                       <div class="scroll"></div>
                   </div>
               </div>
           </div>
           <div class="section project">
               <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/projects/iportalen.php');?>
           </div>
           <div class="section project">
               <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/projects/teamaktiv.php');?>
           </div>
           <div class="section project">
               <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/projects/teamaktiv.php');?>
           </div>

       </div>
   </div>
   <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/script.php');?>
</body>
</html>