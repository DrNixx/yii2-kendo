<?php
namespace kendo\assets;

use yii\web\AssetBundle;

class KendoGridAsset extends AssetBundle
{
    public $sourcePath = '@vendor/drnixx/yii2-kendo/assets/grid';

    public $css = [
    ];

    public $js = [
        'commands.js',
    ];

    public $depends = [
    ];
}
