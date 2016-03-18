<?php
namespace humhub\modules\wechat;

use Yii;
use yii\helpers\Url;
use humhub\modules\wechat\widgets\ChatFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('WechatModule.base', 'WeChat Settings'),
            'url' => Url::toRoute('/wechat/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-weixin"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'wechat' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }
}
