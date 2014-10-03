<?php

class AdminpanelModule extends CWebModule
{
    protected $_allowedActions = array('login','logout');
    
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'adminpanel.models.*',
			'adminpanel.components.*',
		));

//        $this->setComponent($id, $component);
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
            
			if (Yii::app()->user->isGuest && !$this->checkAllowedAction($action)) {
                $url = Yii::app()->createAbsoluteUrl($this->getAdminpanelUrl().'/login',
                        array('redirect' => Yii::app()->request->requestUri) );
                Yii::app()->getRequest()->redirect($url,true,302);
            }
            
			return true;
		}
		else
			return false;
	}

    public function getAdminpanelUrl()
    {
        return $this->getId();
    }

    public function checkAllowedAction($action)
    {
        if (is_object($action)) {
            $action = $action->getId();
        }
        return in_array($action, $this->_allowedActions);
    }
}


//yii-grouk.dev5.oxagile.com/oxa-yii-test/adminpanel/admin/?fgfg=1&ee=2