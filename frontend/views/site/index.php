<?php
use yii\helpers\Html;
use kartik\touchspin\TouchSpin;
/** @var yii\web\View $this */
$this->title = 'ระบบสุ่มรางวัล';
?>
<div style="text-align:center;font-size:18px;">
    <?php  echo $this->render('_reward', ['model' => $searchModel]); ?>
</div>



