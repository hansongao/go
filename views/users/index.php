<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '用户列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create 用户', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
