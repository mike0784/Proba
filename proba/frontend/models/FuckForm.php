<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * FuckForm is the model behind the FuckYou form.
 */
 class FuckForm extends Model
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
	 
	 public function sedQwery()
	 {
		 /*$i = 0;
		 foreach($resultQwery as $key => $value)
		 {
			 $i++;
		 }*/
		 if(!is_array($this->resultQwery)){
			 if($ff == null)
			{
				$this->resultQwery = ['1' => 'Ничего не найдено!!!'];
				$this->path = 'Прошло удачно!!! ';
			}
		 }
	 }
 }