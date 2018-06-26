<?php

use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= Html::encode($this->title) ?></title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">COMPANY LOGO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="about.html">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Sản phẩm dịch vụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Ảnh thi công</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?= $content ?>

<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon" style="left: -50px; bottom: 150px; position: fixed;">
    <div class="phonering-alo-ph-circle"></div>
    <div class="phonering-alo-ph-circle-fill"></div>
    <a href="tel:+841649792844"></a>
    <div class="phonering-alo-ph-img-circle">
        <a href="tel:+841649792844"></a>
        <a href="tel:+841649792844" class="pps-btn-img " title="Liên hệ">
            <img src="<?=Yii::$app->urlManager->baseUrl.'/images/v8TniL3.png'?>" alt="Liên hệ" width="50" onmouseover="this.src='<?=Yii::$app->urlManager->baseUrl.'/images/v8TniL3.png'?>';" onmouseout="this.src='<?=Yii::$app->urlManager->baseUrl.'/images/v8TniL3.png'?>';">
        </a>
    </div>
</div>
<a href="tel:+841649792844">
    <span style="left: 90px; bottom: 30px; position: fixed; background-color: rgba(51, 51, 51, 0.75); color: yellow; padding: 5px 10px; border-radius: 5px; font-size: 20px; z-index: 10000;"><strong>0164.979.2844</strong></span></a>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
