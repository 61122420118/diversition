<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
?>
<div class="sale-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?php ActiveForm::end(); ?>

</div>

<div style="text-align:center;font-size:30px;"> สุ่มรางวัล </div>
<br>
<div style="text-align:center;font-size:50px;">
<?php
$roll = rand(1,3);
$unit = array_merge(range(0,9));
shuffle($unit);
$result = implode(array_slice($unit,$roll,3));
echo $result;
/* @var $this yii\web\View */
/* @var $model frontend\models\Reward */
/* @var $form yii\widgets\ActiveForm */
?>
</div><br>
<div class="reward-form">

    <?php $form = ActiveForm::begin(); ?>



    <div class="form-group">
        <?= Html::submitButton('สุ่มใหม่', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<table class="table_bordered" width="100%" border="3" cellspacing="0">
            <thead>
                   <tr>
                    <td><b>รางวัลที่ 1 </b></td>
                    <td><b>รางวัลที่ 2 </b></td>
                    <td><b>รางวัลที่ 3 </b></td>
                    <td><b> 2 ตัวท้าย</b></td>
                    <td><b> 2 ตัวหน้า</b></td>

                </tr>
            </thead>
            
            <?php
            

                ?>
            <tbody>
              <tr>
                <td><?php echo $result ?></td>
                <td><?php $roll = rand(1,3);
                        $unit = array_merge(range(0,9));
                        shuffle($unit);
                        $result2 = implode(array_slice($unit,$roll,3));
                        echo $result2; ?></td>
                <td><?php $roll = rand(1,3);
                        $unit = array_merge(range(0,9));
                        shuffle($unit);
                        $result3 = implode(array_slice($unit,$roll,3));
                        echo $result3; ?></td>
                <td><?php echo substr($result,1); ?></td>
                <td><?php echo substr($result,0,2); ?></td>
                </tbody>


    </table>  
    