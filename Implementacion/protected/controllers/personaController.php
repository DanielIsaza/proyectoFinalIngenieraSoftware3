<?php 

class personaController extends Controller
{

	public function actionPersona()
	{
		$model = new Persona;
		$modelu = new Usuario;
		$modeldp = new Direccionp;
		$modeldr = new Direccionr;
		$verifyCode= new CodigoVerificacion;

		if(isset($_POST['ajax']) && $_POST['ajax']==='persona-persona-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

		$this->render("/persona/persona",array('model'=>$model,'modelu'=>$modelu,'modeldp'=>$modeldp,'modeldr'=>$modeldr,'verifyCode'=>$verifyCode));

	    if( isset($_POST['Usuario']) and isset($_POST['DireccionR']) and isset($_POST['Direccionp']) and isset($_POST['Persona']))
		{
			$model->attributes=$_POST['Persona'];
			$modelu->attributes=$_POST['Usuario'];
			$modelu->password=sha1($_POST['Usuario']['password']);
			$modeldp->attributes=$_POST['Direccionp'];
			$modeldr->attributes=$_POST['DireccionR'];
			$verifyCode->attributes=$_POST['CodigoVerificacion'];
			//$verifyCode->validate();
				
			if( $modelu->save() and $modeldr->save() and $modeldp->save())
		    {
		    	$model->direccionR=$modeldr->id+0;
		    	$model->direccionP=$modeldp->id+0;
		    	$model->usuario= $modelu->id+0;
		    	
		    	if($model->save())
		    	{
		       		echo "sirvio este mk";
		       	}
		       	else
		       	{
		       		echo "pesaona";
			}
			}
			else
			{
				echo "pendejo !";
			}
				
		}
	}

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

}
?>