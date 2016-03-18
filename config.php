<?php
namespace humhub\modules\wechat;

return [
    'id' => 'wechat',
    'class' => 'humhub\modules\wechat\Module',
    'namespace' => 'humhub\modules\wechat',
    'events' => [
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\wechat\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
