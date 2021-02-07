<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\Token;
use common\models\User;
use frontend\models\Publication;

/**
 * FuckForm is the model behind the FuckYou form.
 */
 class PublicForm extends Model
 {
	 public $pr1;
	 public $list_pr = Null;
	 public $list_sr = Null;
	 public $search;
	 public $sort;
	 public $qr;
	 public $pr2;
	 public $resultQwery=Null;
	 public $path;
	 public $accessToken;
	 public $text;
	 
	 public function sedQwery()
	 {
		 $tp = new Publication();
		 $this->resultQwery = $tp->findAll(['accesstoken' => $this->accessToken]);
		 
		if(isset($this->resultQwery))
		{
			$f = fopen('SaveQwery.txt', 'w');
			if(is_array($this->resultQwery))
			{
				foreach($this->resultQwery as $key => $value)
				{
					if(is_array($value))
					{
						foreach($value as $key1 => $value1)
						{
							fwrite($f, "[".$key."][".$key1."]=".$value1."\n");
						}
					}
					else{
						fwrite($f, $key." = ".$this->resultQwery['textpublication']."\n");
					}
				}
			}
			else{
				fwrite($f, $this->resultQwery['textpublication']);
			}
			fclose($f);
		}
		 if(!is_array($this->resultQwery)){
			 if($ff == null)
			{
				$this->resultQwery = ['1' => 'Ничего не найдено!!!'];
				$this->path = 'Прошло удачно!!! ';
			}
		 }
	 }
	 
	 public function findAccessToken()
	 {
		 $tk = new Token();
		 $asd = Token::findOne(['iduser' => Yii::$app->user->identity->id]);
		 return $this->accessToken = $asd['accesstoken'];
	 }
	 
	 public function textSave()
	 {
		 $tp = new Publication();
		 $tp->accesstoken = $this->accessToken;
		 $st = Yii::$app->request->post();
		 $tp->textpublication = $st['PublicForm']['text'];
		 $tp->save();
		 return 1;
	 }
 }