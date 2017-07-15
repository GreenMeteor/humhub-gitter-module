<?php

use yii\helpers\Url;
use humhub\models\Setting;
?>

<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('GitterModule.base', '<strong>Gitter</strong> Chat'); ?>
  </div>
  <div class="panel-body">

    <script>
      ((window.gitter = {}).chat = {}).options = {
        room: 'GreenVolume'
      };
    </script>
    <script src="https://sidecar.gitter.im/dist/sidecar.v1.js" async defer></script>

</div>
</div>
