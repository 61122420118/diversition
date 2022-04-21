<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\touchspin\TouchSpin;
/** @var yii\web\View $this */
$this->title = 'ระบบสุ่มรางวัล';
?>
    <h3>ค้นหา</h3>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<div style="text-align:center;font-size:18px;">
<div style="text-align:center;font-size:30px;"> สุ่มรางวัล </div>
<br>
<div style="text-align:center;font-size:50px;">

</div><br>
<div class="reward-form">

    <?php $form = ActiveForm::begin(); ?>



    <div class="form-group">
    <?= Html::a('สุ่มใหม่', ['roll'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<table class="table_bordered" width="100%" border="3" cellspacing="0">
            <thead>
                   <tr>
                    <td class="text-center"><b>รางวัลที่ 1 </b></td>
                    <td class="text-center"><b>รางวัลที่ 2 </b></td>
                    <td class="text-center"><b>รางวัลที่ 3 </b></td>
                    <td class="text-center"><b> 2 ตัวท้าย</b></td>
                    <td class="text-center"><b> 2 ตัวหน้า</b></td>

                </tr>
            </thead>
            
            <?php
            

                ?>
            <tbody>
              <tr>
                <td><br></td>
                <td><br></td>
                <td><br></td>
                <td><br></td>
                <td><br></td>
                </tbody>


    </table>  

