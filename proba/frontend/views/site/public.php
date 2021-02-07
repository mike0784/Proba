<?php
/*Данная страница для просмотра, удаления, редактирования и размещения публикаций*/
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Publication';
$this->params['breadcrumbs'][] = $this->title;
$items1 = ['1' => 'названию', '2' => 'теме', '3' => 'автору'];
$params1 = ['prompt' => 'Поиск публикации по...', 'options' => [ '4' => ['Selected' => true]]];
$items2 = ['1' => 'названию', '2' => 'теме', '3' => 'автору', '4' => 'дате'];
$params2 = ['prompt' => 'Сортировать по...'];
$params3 = ['prompt' => 'Найдено'];
$ff;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

	<?php $model->accessToken ?>
	<div class="form-group">
		<?php $form = ActiveForm::begin(['id' => 'public-form']); ?>
		<?= Html::label('AccessToken: '.$model->accessToken) ?> 
		<div class="row">
			<div class="col-lg-5">
				<?= $form->field($model, 'search')->dropDownList($items2, $params1)?>
			</div>
			<div class="col-lg-5">
				<?= $form->field($model, 'pr1')->textInput(['autofocus' => true]) ?>
			</div>
			<div class="form-group">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary', 'name' => 'search-button']) ?>
            </div>
		</div>
		<div class="row">
			<div class="col-lg-5">
				<?= $form->field($model, 'sort')->dropDownList($items1, $params2)?>
			</div>
			<div class="col-lg-5">
				<?= $form->field($model, 'pr2')->textInput() ?>
			</div>
			<div class="form-group">
                <?= Html::submitButton('Sort', ['class' => 'btn btn-primary', 'name' => 'sort-button']) ?>
            </div>
		</div>
		<div class="form-group">
			<?= $form->field($model, 'resultQwery')->listBox($model->resultQwery) ?>
			<?= $form->field($model, 'text')->textInput() ?>
		</div>
		<div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'save']) ?>
        </div>
	</div>
	<?php ActiveForm::end(); ?>
    <code><?= __FILE__ ?></code>
</div>