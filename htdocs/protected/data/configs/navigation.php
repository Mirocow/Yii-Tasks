<?php

return array(
    'title'=>'Navigation-Public',
    'data' => array (
        'items'=>array(
                array('label'=>'Dashboard', 'url'=>array('/dashboard/index')),
                array('label'=>'Journal', 'url'=>array('/journal/index')),
                array('label'=>'Tasks', 'url'=>array('/tasks/index')),
                array('label'=>'Contexts', 'url'=>array('/contexts/index')),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/sign/out'), 'visible'=>!Yii::app()->user->isGuest, 'itemOptions'=>array('style'=>'float:right;'))
        ),
    )
);