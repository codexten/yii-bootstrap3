<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 2/3/19
 * Time: 10:58 AM
 */

return \yii\helpers\ArrayHelper::merge(
//bootstrap3
    [
        'components' => [
            'view' => [
                'theme' => [
                    'pathMap' => [
                        '@app/views' => [
                            '@codexten/yii/bootstrap3/views',
                        ],
                        '@app/widgets/views' => [
                            '@codexten/yii/adminlte2/widgets/views',
                        ],
                    ],
                ],
            ],
        ],
    ],

    //grid
    [
        'container' => [
            'definitions' => [
                \yii\grid\GridView::class => [
                    'class' => \yii\grid\GridView::class,
                    'options' => ['class' => 'grid-view table-responsive'],
                ],
            ],
        ],
    ]
);