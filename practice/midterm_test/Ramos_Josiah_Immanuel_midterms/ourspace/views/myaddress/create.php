<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\myaddress */

$this->title = 'Create My Address';
$this->params['breadcrumbs'][] = ['label' => 'Myaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="myaddress-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
