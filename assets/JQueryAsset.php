<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the JQuery files.
 */
class JQueryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/components/jquery';
    public $js = [
        'jquery.min.js',
    ];
}
