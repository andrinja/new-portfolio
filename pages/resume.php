<?php
$app_mode = 'production';

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
<body class="resume-content">
<?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/drawer.php');?>
<div class="blur-background"></div>
<?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/navigation.php');?>
    <a class="back-btn" href="../index.php"><i class=" material-icons">arrow_back</i></a>
    <img class="cv-image" src="../storage/cv.png" alt="">

<?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/script.php');?>
</body>
</html>