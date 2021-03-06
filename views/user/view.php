<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\GroupAccess;
/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-md-12 ">
		<!-- BEGIN Portlet PORTLET-->
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>Lihat User #<?php echo $model->nama; ?>
				</div>
				<div class="actions">
					<?= Html::a('List User', ['index'], ['class' => 'btn btn-default btn-sm']) ?>
				</div>
			</div>
			<div class="portlet-body">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          
            'username',
            'nama',
			'hp',
			
			'status',
			'created_by',
            'created_date:datetime',
            'edited_by',
            'edited_date:datetime',
        ],
    ]) ?>

</div>
		</div>
		<!-- END Portlet PORTLET-->
	</div>
</div>
