<?php
return array(
    'title'=>'�����',
    'single'=>'�������� ����� �����',
    'model'=>'App\Maintext',
    'columns'=>array(
        'id',
        'name',
        'url'
    ),
    'filters'=>array('name'),
    'edit_fields'=>array(
        'name',
        'body'=>array('type'=>'wyswyg', 'title'=>'����������'),
        'url'
    )
);
