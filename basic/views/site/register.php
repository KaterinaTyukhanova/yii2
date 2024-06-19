<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title)?></h1>

<?php $form = ActiveForm::begin();?>

<?= $form->field($model, 'fio')?>
<?= $form->field($model, 'username')?>
<?= $form->field($model, 'email')?>
<?= $form->field($model, 'password')->passwordInput()?>


<div class="form-group">
    <?= Html::submitButton('Register', ['class' => 'btn btn-primary'])?>
</div>

<?php ActiveForm::end();?>