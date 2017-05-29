<?php

use humhub\compat\CActiveForm;
use humhub\compat\CHtml;
use humhub\models\Setting;
use humhub\modules\gitter\controllers\AdminController;
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= Yii::t('base', '<strong>Gitter</strong> Chat'); ?></div>
	<div class="panel-body">
		<?php $form = CActiveForm::begin(['id' => 'gitter-settings-form']); ?>
			<?= $form->errorSummary($model); ?>
			<p class="help-block"><?= Yii::t('base', 'eg:  "99999999"'); ?></p>
			<div class="form-group">
				<?= $form->labelEx($model, 'sort'); ?>
				<?= $form->textField($model, 'sort', ['class' => 'form-control', 'readonly' => Setting::IsFixed('sort', 'gitter')]); ?>
			</div>
			<p class="help-block"><?= Yii::t('base', 'Widget positioning.'); ?></p>
			<?= CHtml::submitButton(Yii::t('base', 'save'), ['class' => 'btn btn-primary']); ?>
			<?= \humhub\widgets\DataSaved::widget(); ?>
		<?php CActiveForm::end(); ?>
	</div>
</div>
