<?php

class AdminController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionLogin()
    {
        $this->render('index');
    }

    public function actionLogout()
    {
        $this->render('index');
    }

}