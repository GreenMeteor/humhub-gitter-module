<?php

namespace humhub\modules\gitter;

use Yii;
use yii\helpers\Url;
use humhub\modules\gitter\widgets\GitterFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('GitterModule.base', 'Gitter Settings'),
            'url' => Url::toRoute('/gitter/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-gitter"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'gitter' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addGitterFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(GitterFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'gitter')
        ]);
    }
}
