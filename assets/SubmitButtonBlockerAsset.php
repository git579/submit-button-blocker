<?php

namespace git579\blocker\assets;

use yii\web\AssetBundle;

/**
 * Class SubmitButtonBlockerAsset
 * @package git579\blocker\assets
 */
class SubmitButtonBlockerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@common/components/submitButtonBlocker/resource/js';
    /**
     * @inheritdoc
     */
    public $js = [
        'submitButtonBlocker.js',
    ];
}