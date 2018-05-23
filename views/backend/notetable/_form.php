<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\note\models\NoteTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="note-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noteId')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
