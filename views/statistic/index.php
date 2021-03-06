<?php
use app\models\Event;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$form= ActiveForm::begin();
$this->params['breadcrumbs'][] = ['label' => 'Thống kê', 'url' => ['index']];

$this->params['breadcrumbs'][] = 'Xem thống kê theo chương trình';
$this->title = 'Thống kê';
?>

<div class="page-content">
	<div class="page-header position-relative">
		<h1>Xem bảng thống kê
		</h1>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<div class="col-xs-6">

					<div class="control-group">
						<label class="control-label">Chọn 1 chương trình</label>

						<div class="controls">
								<?php echo $form->field($model, 'id')->widget(Select2::classname(), [
									'data' => ArrayHelper::map(Event::find()->asArray()->all(



									),'id','name'),
									'options' => ['placeholder' => 'Chọn một chương trình...'],
									'pluginOptions' => [
										'allowClear' => true
									],
								])->label(false);?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php ActiveForm::end()?>
<script>
	$(document).on('change', '#event-id', function () {
		window.location.href = '<?php echo Url::to(['statistic/view'])?>/?id=' + $(this).val();
	});
</script>                       