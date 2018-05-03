<?php

namespace kouosl\note\controllers\api;

use kouosl\note\models\Note;
use Yii;

class NoteController extends DefaultController {
	
	public $modelClass = 'kouosl\note\models\Note';
	
	public function actions() {
		$actions = parent::actions ();
	
		return $actions;
	}
	
	public function actionView($id){

		$model = Note::findOne($id);
		
		if(!$model)
			return ['status' => '404','message' => 'Not Found'];

		return $model;
	}
	
	public function actionIndex(){
		return Note::find()->all();
	}
	
	public function actionCreate(){

		$postParams = yii::$app->request->post();
		
		$model = new Note();
	
		
		if($model->load($postParams,'') && $model->validate()){
			if($model->save())
			    return ['status' => 1];
			else
			    return ['status' => 500];
		}
		else
			return ['status' => 100,'message' => 'Parametre Hatası'];
		
	}
	
	public function actionUpdate($id){

		$postParams = yii::$app->request->post();
		
		$model = Note::findOne($id);

		if($model = $this->LoadModel($model, $postParams)){
				if($model->save())
					return ['status' => 1];
				else 
					return ['status' => 101,'message' => $model->errors];
		}else
		    return ['status' => 100];
	}
	
	public function actionDelete($id){
		
		if(Note::findOne($id)->delete())
			return ['status' => 1];
		else
			return ['stauts' => 100];
	}
	
	public function LoadModel($model,$params)
	{
		foreach ($params as $key => $value)
			$model->hasAttribute($key) ? $model->$key = $value : " "; 
			
		return $model;
	}
	
	
	
	
	
	
	
	
	
	
}