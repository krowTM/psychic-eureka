<?php

namespace api\controllers;

use Yii;
use yii\rest\Controller;
use yii\filters\auth\QueryParamAuth;
use yii\web\Response;
use api\models\Notification;
//use yii\httpclient\XmlParser;

class NotificationController extends Controller
{
	public function init()
	{
		parent::init();
		\Yii::$app->user->enableSession = false;
	}
	
	public function behaviors()
	{
		$behaviors = parent::behaviors();
	    $behaviors['authenticator'] = [
	        'class' => QueryParamAuth::className(),
	    ];	    
	    //$behaviors['contentNegotiator']['formats']['application/xml'] = Response::FORMAT_XML;
	    //$behaviors['only'] = ['notify'];
	    
		return $behaviors;
	}
	
    public function actionNotify()
    {
    	$notification = new Notification();
    	$notification->rawBody = Yii::$app->getRequest()->getRawBody();
    	
    	print_r($notification->getParsedXML()); die();
        
        //return $this->render('notify');
    	\Yii::$app->response->format = \yii\web\Response::FORMAT_XML;
        return [1];
    }

}
