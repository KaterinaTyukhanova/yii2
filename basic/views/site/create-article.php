<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create Article';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'hashtags')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
<?= $form->field($model, 'image')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton('Create Article', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>