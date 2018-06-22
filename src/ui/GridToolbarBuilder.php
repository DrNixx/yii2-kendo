<?php
namespace kendo\ui;

use Yii;
use yii\helpers\Html;

class GridToolbarBuilder
{
    /**
     * Build Grid toolbar
     * @param array $config
     * @return GridToolbarItem[]
     */
    public static function make($config = [])
    {
        $result = [];
        foreach ($config as $key => $value) {
            if ($key === 'create') {
                $result[] = GridToolbarItem::make([
                    'custom',
                    'template' => Html::a(
                        Yii::t("common", "Create"),
                        $value,
                        [
                            'class' => "btn btn-primary btn-sm btn-small m-r-5",
                            'data-command' => "create",
                            'data-item' => 'false'
                        ]
                    )
                ]);
            }

            if ($key === 'view') {
                $result[] = GridToolbarItem::make([
                    'custom',
                    'template' => Html::a(
                        '<i class="fa fa-eye fa-lg"></i> '.Yii::t("common", "View"),
                        "javascript:;",
                        [
                            'class' => "btn btn-primary btn-sm btn-small m-r-5",
                            'data-command' => "view",
                            'data-item' => 'true',
                            'data-href' => $value
                        ]
                    )
                ]);
            }

            if ($key === 'update') {
                $result[] = GridToolbarItem::make([
                    'custom',
                    'template' => Html::a(
                        '<i class="fa fa-edit fa-lg"></i> '.Yii::t("common", "Change"),
                        "javascript:;",
                        [
                            'class' => "btn btn-primary btn-sm btn-small m-r-5",
                            'data-command' => "update",
                            'data-item' => 'true',
                            'data-href' => $value
                        ]
                    )
                ]);
            }

            if (($key === 'custom') || (is_int($key))) {
                $options = [];
                $href = 'javascript:;';
                $text = [];

                $options['class'] = 'btn btn-sm btn-small m-r-5';
                if (!empty($value['class'])) {
                    $options['class'] .= " {$value['class']}";
                }

                if (!empty($value['command'])) {
                    $options['data-command'] = $value['command'];
                }

                if (isset($value['item'])) {
                    if (is_bool($value['item'])) {
                        $value['item'] = $value['item'] ? 'true' : 'false';
                    }

                    $options['data-item'] = $value['item'];
                    $options['data-href'] = $value['url'];
                } else {
                    $options['data-item'] = $value['item'];
                    $href = $value['url'];
                }

                if (!empty($value['icon'])) {
                    $text[] =  "<i class=\"{$value['icon']} fa-lg\"></i>";
                }

                if (!empty($value['label'])) {
                    $text[] =  $value['label'];
                }

                $result[] = GridToolbarItem::make([
                    'custom',
                    'template' => Html::a(implode(" ", $text), $href, $options),
                ]);
            }

            if ($key === 'delete') {
                $result[] = GridToolbarItem::make([
                    'custom',
                    'template' => Html::a(
                        '<i class="fa fa-trash fa-lg"></i> '.Yii::t("common", "Delete"),
                        "javascript:;",
                        [
                            'class' => "btn btn-danger btn-sm btn-small m-r-5 pull-right",
                            'data-command' => "delete",
                            'data-item' => 'true',
                            'data-href' => $value
                        ]
                    )
                ]);
            }
        }

        return $result;
    }
}
