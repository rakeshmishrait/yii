<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags(); ?>
    <title><?= Html::encode($this->title); ?></title>
   <?php $this->registerJsFile('bower_components/jquery/dist/jquery.min.js',['position' =>\yii\web\View::POS_HEAD]);   ?>
   <?php $this->head(); ?>
</head>
<?php
$bodyClass = '';
if(Yii::$app->controller->module->requestedRoute =='site/login'){
    $bodyClass = 'hold-transition login-page';
}
?>
<body class="<?php echo !empty($bodyClass)?$bodyClass:''; ?>">
<?php $this->beginBody(); ?>
<div class="wrap">    
    <div class="container">        
        <?= Alert::widget(); ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-center">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y'); ?></p>
    </div>
</footer>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>