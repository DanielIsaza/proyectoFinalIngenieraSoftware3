<?php

class PersonaController extends Controller
{
	public function actionPersona()
	{
	    $model=new Persona('register');

	    // uncomment the following code to enable ajax-based validation
	    /*
	    if(isset($_POST['ajax']) && $_POST['ajax']==='persona-persona-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    */

	    if(isset($_POST['Persona']))
	    {
	        $model->attributes=$_POST['Persona'];
	        if($model->validate())
	        {
	            // form inputs are valid, do something here
	            return;
	        }
	    }
	    $this->render('persona',array('model'=>$model));
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}