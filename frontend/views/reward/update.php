<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reward */

$this->title = 'Update Reward: ' . $model->reward_id;
$this->params['breadcrumbs'][] = ['label' => 'Rewards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reward_id, 'url' => ['view', 'reward_id' => $model->reward_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reward-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
