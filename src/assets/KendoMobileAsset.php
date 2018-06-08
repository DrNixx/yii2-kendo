<?php
namespace kendo\assets;

use Yii;
use yii\web\AssetBundle;

class KendoMobileAsset extends AssetBundle
{
    public $cdnPath = "";

    public $sourcePath = null;

    public $js = [
    ];

    public $css = [
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * KendoAsset constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function init()
    {
        if (empty($this->cdnPath)) {
            $this->cdnPath = Yii::$app->params['kendoui.cdn'];
        }

        $this->js = [
            $this->cdnPath.'/js/kendo.mobile.js',
            $this->cdnPath.'/js/jszip.min.js',
            $this->cdnPath.'/js/kendo.timezones.js',
            $this->cdnPath.'/plugins/kendo-ui/js/cultures/kendo.culture.' . Yii::$app->language . '.js',
            $this->cdnPath.'/js/messages/kendo.messages.'.Yii::$app->language.'.min.js'
        ];

        $this->css = [
            $this->cdnPath.'/plugins/kendo-ui/css/kendo.mobile.all2.min.css',
            //'css/kendo.common-material.min.css',
            //'css/kendo.materialblack.min.css',
            //'css/kendo.materialblack.mobile.min.css',
        ];

        parent::init();
    }
}
