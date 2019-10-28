<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/8/18
 * Time: 8:30 PM
 */

$widget = $this->context;

/* @var $this \yii\web\View */
/* @var $widget \codexten\yii\web\widgets\Page */
/* @var $content string */
?>

<div class="row">
    <div class="col-md-12">
        <div class="pull-right ">

            <?= $widget->renderContent('main-actions') ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <?= $content ?>

    </div>
</div>
