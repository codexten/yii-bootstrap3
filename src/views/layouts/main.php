<?php
/**
 * @link https://entero.co.in/
 * @copyright Copyright (c) 2012 Entero Software Solutions Pvt.Ltd
 * @license https://entero.co.in/license/
 * @author Jomon Johnson <jomonjohnson.dev@gmail.com>
 * @author Ashlin A <ashlin@entero.in>
 */

/* @var $this \yii\web\View */
/* @var $content string */
?>

<?php $this->beginPage(); ?>

<?php $this->beginContent('@app/views/layouts/base.php'); ?>

<?= $this->render('@app/views/layouts/blocks/title') ?>

<?= $content ?>

<?php $this->endContent() ?>