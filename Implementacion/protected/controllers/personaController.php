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

		$this->render("/persona/persona",array('model'=>$model,'modelu'=>$modelu,'modeldp'=>$modeldp,'modeldr'=>$modeldr,'verifyCode'=>$verifyCode));

		echo "das";

		var_dump($_POST);

	    if(isset($_POST['Persona']) and isset($_POST['Direccionp']) and isset($_POST['Direccionr']) and isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Persona'];
			$modelu->attributes=$_POST['Usuario'];
			$modelu->password=sha1($_POST['Usuario']['password']);
			$modeldp->attributes=$_POST['Direccionp'];
			$modeldr->attributes=$_POST['Direccionr'];
			$verifyCode->attributes=$_POST['CodigoVerificacion'];
			//$verifyCode->validate();
				
			if($model->save() and $modelu->save() and $modeldp->save() and $modeldr->save())
		    {
		       	echo "sirvio este mk";
			}
			else
			{
				echo "pendejo !";
			}
				
		}

	}
}
?>