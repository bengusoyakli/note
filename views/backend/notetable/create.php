<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\note\models\NoteTable */

$this->title = 'Create Note Table';
$this->params['breadcrumbs'][] = ['label' => 'Note Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="note-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
