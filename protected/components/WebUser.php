<?php

class WebUser extends CWebUser
{
    private $modelUser = null;

    public function getRole()
    {
        if ($user = $this->getModel()) {
            return $user->role;
        }

        return '';
    }

    private function getModel()
    {
        if (!$this->isGuest && $this->modelUser === null) {
            $this->modelUser = Users::model()->findByPk($this->id, array('select' => 'role'));
        }

        return $this->modelUser;
    }
}
