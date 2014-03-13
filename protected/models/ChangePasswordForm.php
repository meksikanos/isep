<?php

class ChangePasswordForm extends CFormModel
{
    public $currentPassword;
    public $newPassword;
    public $newPasswordRepeat;

    /**
     * Validation rules for this form.
     *
     * @return array
     */
    public function rules()
    {
        return array(
            array('currentPassword, newPassword, newPasswordRepeat', 'required', 'message'=>'Pole wymagane - wpisz wartość!'),
            array('currentPassword', 'validateCurrentPassword'),
            array('newPassword', 'compare', 'compareAttribute'=>'newPasswordRepeat', 'message'=>'Oba hasła muszą się zgadzać!'),
            //array('newPassword', 'compare', 'compareAttribute'=>'validateNewPassword'),
            //array('newPassword', 'match', 'pattern'=>'/^[a-z0-9_\-]{5,}/i', 'message'=>'Your password does not meet our password complexity policy.'),
        );
    }

    /**
     * @return string Hashed password
     */
    protected function createPasswordHash($password)
    {
        return md5($password);
    }

    /**
     * I don't know how you access user's password as well.
     *
     * @return string
     */
    protected function getUserPassword()
    {
    	$user = AdminUser::model()->findByPk(array('username'=>Yii::app()->user->id));
		
        return $user->password;
    }

    /**
     * Saves the new password.
     */
    public function saveNewPassword()
    {
        $user = AdminUser::model()->findByPk(array('username'=>Yii::app()->user->id));
        $user->password = $this->createPasswordHash($this->newPassword);
        $user->update();
    }

    /**
     * Validates current password.
     *
     * @return bool Is password valid
     */
    public function validateCurrentPassword($attribute,$params)
    {
    	if (($this->createPasswordHash($this->currentPassword) === $this->getUserPassword()) == FALSE)
		{
			$this->addError('currentPassword','Podałeś nieprawidłowe aktualne hasło!');
		}
    }
}