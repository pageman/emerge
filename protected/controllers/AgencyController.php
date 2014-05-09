<?php

class AgencyController extends Controller
{
	public function actionDashboard(){
		$agencyInfo = Agencies::model()->findByPk(Yii::app()->user->id);
		$this->render('index',array('agency'=>$agencyInfo));
	}

	public function actionProfile(){
		$agencyInfo = Agencies::model()->findByPk(Yii::app()->user->id);
		$this->render('profile',array('agency'=>$agencyInfo));
	}
}