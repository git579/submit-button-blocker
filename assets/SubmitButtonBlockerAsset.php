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
    public $sourcePath = '@git579/blocker/resource/js';
    /**
     * @inheritdoc
     */
    public $js = [
        'submitButtonBlocker.js',
    ];
}