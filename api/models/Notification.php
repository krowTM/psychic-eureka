<?php

namespace api\models;

use Yii;
use yii\base\Model;

class Notification extends Model
{
    public $name;
    public $body;

    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
