<?php
class CodigoVerificacion extends CFormModel
{
	public $verifyCode;
	
	public function rules()
	{
		return array(
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}
?>