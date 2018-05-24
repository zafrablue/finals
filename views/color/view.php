<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Color','url'=>['/color/index']];
$this->params['breadcrums'][] = $model->color;

?>
<h1>View Your Color</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'color'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update Post',
            ['/color/update','id'=>$model->id],
            ['class'=>'btn btn-primary']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this color?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>
