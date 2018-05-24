<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'tshirt','url'=>['/tshirt/index']];
$this->params['breadcrums'][] = $model->description;

?>
<h1>View Your Tshirts</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'color_id',
'size_id',
'description',
'price',
'quantity'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update tshirt',
            ['/tshirt/update','id'=>$model->id],
            ['class'=>'btn btn-primary']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this tshirt?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>
