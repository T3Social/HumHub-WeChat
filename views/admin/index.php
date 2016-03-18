<?php
use humhub\compat\CActiveForm;
use humhub\compat\CHtml;
use humhub\models\Setting;
use humhub\modules\wechat\controllers\AdminController;
?>
<div class="panel panel-default">
	<div class="panel-heading"><?=Yii::t('WechatModule.base', '<strong>WeChat</strong>'); ?></div>
	<div class="panel-body">
		<script src="https://togetherjs.com/togetherjs-min.js"></script>
		<button onclick="TogetherJS(this); return false;">Start TogetherJS</button>
	</div>
</div>
