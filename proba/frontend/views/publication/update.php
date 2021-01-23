<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\publication */

$this->title = 'Update Publication: ' . $model->namepublic;
$this->params['breadcrumbs'][] = ['label' => 'Publications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->namepublic, 'url' => ['view', 'id' => $model->namepublic]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publication-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
