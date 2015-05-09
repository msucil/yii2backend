<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('backtheme','/advanced/themes/backend');
Yii::setAlias('fronttheme', '/advanced/themes/frontend');

/*
 * Following alias need to be changed while uploading to the server
 */
//=================================================
/*
 * alias @upload for uploading images and files through forms
 */
Yii::setAlias('upload', dirname(dirname(__DIR__)) .'/resources/uploads/');
/*
 * alias @resource for inserting files and images uploaded on front end
 */
Yii::setAlias('resource', '/advanced/resources/uploads/');

/*
 * @alias @default for inserting default files and images
 */

Yii::setAlias('default','/advanced/resources/default');
