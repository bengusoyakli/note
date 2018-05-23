<?php

use yii\helpers\Html;
use yii\grid\GridView;




 /*@var $this yii\web\View */
/* @var $searchModel kouosl\note\models\NoteTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Note table ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="note-table-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Note Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'noteId',
            'note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],


		
    ]); ?>

</div>
