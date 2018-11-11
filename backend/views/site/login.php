<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo Yii::$app->request->baseUrl; ?>"><b>Admin</b>LTE</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
           <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
               <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
               <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="row">
                    <div class="col-xs-8">             
                        <div class="checkbox icheck">
                            <label>
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </label>
                        </div>
                    </div>
                <!-- /.col -->
                <div class="col-xs-4">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
               </div>
            </div>
            <?php ActiveForm::end(); ?>
            <a href="#">I forgot my password</a><br>
            <a href="<?php echo 1 ?>" class="text-center">Register a new membership</a>
        </div>
    </div>