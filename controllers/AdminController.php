<?php

namespace humhub\modules\gitter\controllers;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;

class AdminController extends \humhub\modules\admin\components\Controller
{

    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className(),
                'adminOnly' => true
            ]
        ];
    }

    public function actionIndex()
    {
        $form = new \humhub\modules\gitter\forms\SettingsForm();
        if ($form->load(Yii::$app->request->post())) {
            if ($form->validate()) {
                Setting::Set('sort', $form->sort, 'gitter');

                Yii::$app->session->setFlash('data-saved', Yii::t('base', 'Saved'));
                // $this->redirect(Url::toRoute('index'));
            }
        } else {
            $form->sort = Setting::Get('sort', 'gitter');
        }

        return $this->render('index', [
            'model' => $form
        ]);
    }

}
