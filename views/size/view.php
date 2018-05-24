<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Size','url'=>['/size/index']];
$this->params['breadcrums'][] = $model->size;

?>
<h1>View Your Size</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'size'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update Post',
            ['/size/update','id'=>$model->id],
            ['class'=>'btn btn-primary ']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this size?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>
