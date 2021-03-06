<?php

namespace api\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
	public static function tableName()
	{
		return 'api_users';
	}
	
	public static function findIdentityByAccessToken($token, $type = null)
	{
		return static::findOne(['access_token' => $token]);
	}
	
	public static function findIdentity($id)
	{
		return static::findOne($id);
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getAuthKey()
	{
		return $this->authKey;
	}
	
	public function validateAuthKey($authKey)
	{
		return $this->authKey === $authKey;
	}

}