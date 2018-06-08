<?php
namespace kendo\assets;

use Yii;
use yii\web\AssetBundle;

class KendoAsset extends AssetBundle
{
    public $cdnPath = "";

    public $sourcePath = null;

    public $basePath = null;

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
            $this->cdnPath.'/js/kendo.web.min.js',
            $this->cdnPath.'/js/kendo.timezones.min.js',
            $this->cdnPath.'/js/cultures/kendo.culture.'.Yii::$app->language.'.min.js',
            $this->cdnPath.'/js/messages/kendo.messages.'.Yii::$app->language.'.min.js'
        ];

        $this->css = [
            $this->cdnPath.'/css/kendo.common.min.css',
            $this->cdnPath.'/css/kendo.common-bootstrap.min.css',
            $this->cdnPath.'/css/kendo.bootstrap.min.css',
            $this->cdnPath.'/css/kendo.bootstrap.mobile.min.css'
        ];

        parent::init();
    }
}
