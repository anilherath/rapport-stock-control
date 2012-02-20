<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	
	private  $_id;
	private $hashPass;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		

		$username=strtolower($this->username);
        $user=User::model()->find('LOWER(username)=?',array($username));
        if($user===null)
        {
        	$this->errorCode=self::ERROR_USERNAME_INVALID;
        }
		else
        {
        	
//         	echo '<br> USER PASS :'.$user->password;
//         	echo '<br> THIS PASS :'.$this->password;

        	
        	$hashPass=hash('sha256', $this->password);	
        	if ($user->password!==$hashPass)
        	{		
//         			echo '<br> USER PASS :'.$user->password;
//         			echo '<br> HASH PASS :'.$hashPass;
                        $this->errorCode=self::ERROR_PASSWORD_INVALID;
        	}
        	else 
        	{
        		$this->_id=$user->id;
        		$this->username=$user->username;
           	 	$this->errorCode=self::ERROR_NONE;		
        	}
        }
     	return $this->errorCode==self::ERROR_NONE;
    }
    
	public function getId()
    {
        return $this->_id;
    }
        
	/*ORIGINAL CODE	
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/
}//END OF CLASS.