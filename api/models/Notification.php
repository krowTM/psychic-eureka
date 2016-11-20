<?php

namespace api\models;

use Yii;
use yii\base\Model;
use light\yii2\XmlParser;

class Notification extends Model
{
    public $rawBody;
    public $body;

    public function getParsedXML()
    {
    	$xmlParser = new XmlParser();
    	$this->body = $xmlParser->parse($this->rawBody, null);
    	
    	return $this->body;
    }
}
