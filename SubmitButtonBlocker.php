<?php

namespace git579\blocker\submitButtonBlocker;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use git579\blocker\assets\SubmitButtonBlockerAsset;

trait SubmitButtonBlocker
{
    public static $trigger_class = 'disable-before-validate';

    public static function submitButtonWithDisabling($content = 'Submit', $options = [])
    {
        SubmitButtonBlockerAsset::register(Yii::$app->view);
        $options['class'] = ArrayHelper::getValue($options, 'class', '') . ' ' . self::$trigger_class;
        $options['type'] = 'submit';
        return Html::button($content, $options);
    }
}