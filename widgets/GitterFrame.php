<?php
namespace humhub\modules\gitter\widgets;

use yii\base\Widget;

class GitterFrame extends Widget
{

    public $contentContainer;

    public function run()
    {

        return $this->render('gitterframe', []);
    }
}
