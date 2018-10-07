<?php

namespace humhub\modules\gitter;

return [
    'id' => 'gitter',
    'class' => 'humhub\modules\gitter\Module',
    'namespace' => 'humhub\modules\gitter',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\gitter\Events',
                'addGitterFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\gitter\Events',
                'addGitterFrame'
            ]
        ],
        [
            'class' => \humhub\modules\user\widgets\ProfileSidebar::class,
            'event' => \humhub\modules\user\widgets\ProfileSidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\gitter\Events',
                'addGitterFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\gitter\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];

?>
