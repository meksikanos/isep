<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $id;
	public $ldapMode;
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */

	 	/**
	 * Constructor.
	 * @param string $username username
	 * @param string $password password
	 */
	public function __construct($username,$password,$ldapMode)
	{
		$this->username=$username;
		$this->password=$password;
		$this->ldapMode=$ldapMode;
	}
	 
	public function authenticate()
	{
		$user=AdminUser::model()->findByAttributes(array('username'=>$this->username));
		
		if(!isset($user))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else
		{
			if ($this->ldapMode)
			{
				$options = Yii::app()->params['ldap'];
				$connection = ldap_connect($options['host']);
		        //$connection = ldap_connect($options['host'], $options['port']);
		        ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
		        ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
	 
		        if($connection)
		        {
		        	$bind;
		            try
		            {
		            	//$dnName = "CN=molodmar,OU=Etat3,OU=Users,OU=TP-PL,DC=tp,DC=gk,DC=corp,DC=tepenet";
		            	//$dnName = "CN=molodmar,OU=Users";
		            	$dnName = "TP\\".$this->username;
		            	
		                @$bind = ldap_bind($connection, $dnName, $this->password);
						//ldap_unbind($connection);
		            }
		            catch (Exception $e)
		            {
						Yii::app()->user->setFlash('error', $e->getMessage());
		            }
					catch(ErrorException $ex)
					{
						
					}
		            
		            if(!$bind) $this->errorCode = self::ERROR_PASSWORD_INVALID;
		            else
		            { 
		            	$this->errorCode = self::ERROR_NONE;
						$this->id = $user->id;
						$this->setState('role', $user->roles);
						$this->setState('password', $user->password);
						$this->errorCode=self::ERROR_NONE;
					}
		        }					
			}
			else 
			{
				if($user->password!==md5($this->password))
					$this->errorCode=self::ERROR_PASSWORD_INVALID;
				else
				{
					$this->id = $user->id;
					$this->setState('role', $user->roles);
					$this->setState('password', $user->password);
					$this->errorCode=self::ERROR_NONE;
				}
			}
		}

		return !$this->errorCode;
	}
		
	public function getId()
	{
		return $this->id;
	}
	
}