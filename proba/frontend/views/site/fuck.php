<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Fuck you';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>PUKI PAKI</p>
	<?php $form = ActiveForm::begin(['id' => 'fuck-form']); ?>
		<div class="form-group">
			<?= $form->field($model, 'list_pr')->dropDownList('list_pr', $items = [1=>'названию', 2=>'теме', 3=>'автору'])?>
			<?= Html::label('Найти по: ')?>
			<?= Html::dropDownList('list', 'id', [1=>'названию', 2=>'теме', 3=>'автору']) ?>
			<?= Html::input('text') ?>
			<?= Html::submitButton('Найти', ['class' => 'btn btn-primary', 'name' => 'ss-button']) ?>
		</div>
		<div class="form-group">
			<?= Html::label('Сортировать по')?>
			<?= Html::dropDownList('list', 'id', [1=>'названию', 'теме', 'автору', 'дате'])?>
			<?= Html::submitButton('Сортировать', ['class' => 'btn btn-primary', 'name' => 'ss-button']) ?>
		</div>
		<div class="form-group">
			<?= Html::listBox('list', Null, ['qwe', 'wfwe', '21423vf'])?>
		</div>
	<?php ActiveForm::end(); ?>
    <code><?= __FILE__ ?></code>
</div>

