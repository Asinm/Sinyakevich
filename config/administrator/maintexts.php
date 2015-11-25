<?php
return array(
    'title'=>'Текст',
    'single'=>'Добавить новый текст',
    'model'=>'App\Maintext',
    'columns'=>array(
        'id',
        'name',
        'url'
    ),
    'filters'=>array('name'),
    'edit_fields'=>array(
        'name',
        'body'=>array('type'=>'wyswyg', 'title'=>'содержание'),
        'url'
    )
);
