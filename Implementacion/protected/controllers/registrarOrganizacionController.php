<?php 

class registrarOrganizacionController extends Controller
{
	/**
	*
	*/
	public function actionregistrarOrganizacion()
	{

	    $model=new Organizacion;
		$modelu = new Usuario;
		$modelrp= new Representantelegal;
		$modelad = new Administrador;
		$verifyCode= new CodigoVerificacion;    
	
		$this->performAjaxValidation(array($model,$modelrp,$modelad,$modelu));

	    $this->render('/registrarOrganizacion/registrarOrganizacion',array('model'=>$model,'modelu'=>$modelu,'modelad'=>$modelad,'modelrp'=>$modelrp,'verifyCode'=>$verifyCode));

		if(isset($_POST['Organizacion']) and isset($_POST['Usuario']) and isset($_POST['Representantelegal']))
	    {
	    	$modelu->attributes=$_POST['Usuario'];
			$modelu->password=sha1($_POST['Usuario']['password']);
	        $model->attributes=$_POST['Organizacion'];
	        $modelrp->attributes=$_POST['Representantelegal'];
	        $modelad->attributes=$_POST['Administrador'];
    		$verifyCode->attributes=$_POST['CodigoVerificacion'];

    		$modelrp->organizacion = $model->nit;
    		$modelad->organizacion = $model->nit;
	        //
	        $modelu->save();
	        $model->save();
	        $modelad->save();

	        if( $modelrp->save() )
	        {
	        	echo "El registro fue exitoso!";
	        }
	        else
	        {
	        	echo "Ha ocurrido un error!";
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

	protected function performAjaxValidation($models)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='organizacion-organizacion-form')
	    {
	        echo CActiveForm::validate($models);
	        Yii::app()->end();
	    }
	}
}
?>