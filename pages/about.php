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
    <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'/includes/styles.php'); ?>
</head>

<body class="about-page">
<?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/drawer.php');?>
    <div class="page-content">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/navigation.php');?>
        <div class="top-container">
            <div class="value-items">
                <div class="item">
                    <img class="circle" src="../storage/circle1.png" alt="">
                    <div class="title">Design</div>
                </div>
                <div class="item">
                    <img class="circle" src="../storage/circle2.png" alt="">
                    <div class="title">Usability</div>
                </div>
                <div class="item">
                    <img class="circle" src="../storage/circle3.png" alt="">
                    <div class="title">Creativity</div>
                </div>
                <div class="item">
                    <img class="circle" src="../storage/circle4.png" alt="">
                    <div class="title">Content</div>
                </div>
            </div>
            <img class="andra-back-image" src="../storage/about.JPG" alt="">
        </div>
        <div class="bottom-container">
            <div class="about-title">Creative and innovative UX/ UI designer and developer, who enjoys working in a fast paced and technically
                challenging environment. Self-driven, with an enthusiastic, flexible and 'can-do' attitude.</div>
            <div class="subtitle">Never stop learning  because life never stops teaching</div>
            <div class="progress-bar">
                <div class="line"></div>
            </div>
            <div class="skill-items">
                <div class="row">
                    <div class="item html">
                        <div class="title">HTML</div>
                    </div>
                    <div class="item javascript">
                        <div class="title">Javascript</div>
                    </div>
                    <div class="item css">
                        <div class="title">CSSS3</div>
                    </div>
                    <div class="item jquery">
                        <div class="title">Jquery</div>
                    </div>
                    <div class="item php">
                        <div class="title">PHP</div>
                    </div>
                    <div class="item mysql">
                        <div class="title">MySql</div>
                    </div>
                    <div class="item sass">
                        <div class="title">SASS</div>
                    </div>
                    <div class="item photoshop">
                        <div class="title eight">Photoshop</div>
                    </div>
                    <div class="item illustrator">
                        <div class="title">Illustrator</div>
                    </div>
                    <div class="item premiere">
                        <div class="title">Premiere Pro</div>
                    </div>
                    <div class="item after-effects">
                        <div class="title">After effects</div>
                    </div>
                    <div class="item figma">
                        <div class="title">Figma & Sketch</div>
                    </div>
                    <div class="item seo">
                        <div class="title">SEO Optimization</div>
                    </div>
                    <div class="item wordpress">
                        <div class="title">Wordpress</div>
                    </div>
                    <div class="item angular">
                        <div class="title">Angular</div>
                    </div>
                    <div class="item laracasts">
                        <div class="title">Laracasts</div>
                    </div>
                    <div class="item bootstrap">
                        <div class="title">Bootrstrap</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'].$root_url.'includes/script.php');?>
</body>
</html>