<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	// array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Create Post</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>