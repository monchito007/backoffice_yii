<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;

	private $_identity;
        
        public $verifyCode; //Captcha
        
        

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
                    
                         // put the captcha validator first
                        array('verifyCode', 'captcha'),
			// username and password are required
			array('username, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate','skipOnError' => true));
                     
                     /*return array(
                        array('username, password', 'required'),
                        array('username,password,verifyCode','required','on'=>'captchaRequired'),
		);*/
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Remember me next time',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Incorrect username or password.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
        // 2. attach the behavior to LoginForm
        public function behaviors()
        {
            return array(
                'smartCaptcha' => array(
                    'class' => 'SmartCaptchaBehavior',
                    'numErrorBefore' => 2, // the number of errors allowed before first to show captcha.
                    'numErrorAfter' => 5, // the number of errors allowed once pass captcha validation.
                    'attributes' => null, // list of attributes whose error affects to show captcha. Defaults to null for all attributes.
                ),
            );
        }
        
}
