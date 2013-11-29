<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'base_path' => URL::base().'modules/ckeditor/',
    'config'    => array(
        //'toolbar'          => 'Standart',
        'language'         => 'ru',
        'width'            => 650,
        'height'           => 250,

        'removeDialogTabs' => '',

        'toolbarGroups'          => array(
            array('name' => 'clipboard', 'groups' => array('clipboard', 'undo')),
            array('name' => 'editing', 'groups' => array('find', 'selection', 'spellchecker')),
            array('name' => 'links'),
            array('name' => 'insert'),
            array('name' => 'forms'),
            array('name' => 'tools'),
            array('name' => 'document', 'groups' => array('mode', 'document', 'doctools')),
            array('name' => 'others'),
            '/',
            array('name' => 'basicstyles', 'groups' => array('basicstyles', 'cleanup')),
            array('name' => 'paragraph', 'groups' => array('list', 'indent', 'blocks', 'align', 'bidi')),
            array('name' => 'styles'),
            array('name' => 'colors'),
            array('name' => 'about')
        )
    )
);
