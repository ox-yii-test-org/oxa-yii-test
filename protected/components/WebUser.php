<?php

class WebUser extends CWebUser
{
    private $modelUser = null;

    public function getRole()
    {
        $user = $this->getModel();

        if ($user) {
            return $user->role;
        }

        return false;
    }

    private function getModel()
    {
        if (!$this->isGuest && $this->modelUser === null) {
            $this->modelUser = Users::model()->findByPk(
                $this->id,
                array(
                    'select' => 'role',
                )
            );
        }

        return $this->modelUser;
    }
}
