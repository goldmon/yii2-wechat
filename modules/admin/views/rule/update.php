<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model callmez\wechat\models\Rule */

$this->title = '修改回复规则: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '回复规则列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
?>
<div class="rule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'keyword' => $keyword,
        'keywords' => $keywords
    ]) ?>

</div>
