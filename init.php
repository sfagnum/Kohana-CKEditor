<?php defined('SYSPATH') or die('No direct script access.');

Route::set('modules/ckeditor', 'modules/ckeditor(/<file>)', array('file' => '.+'))
    ->defaults(
        array(
            'directory' => 'editor',
            'controller' => 'ckeditor',
            'action'     => 'index',
            'file'       => NULL
        )
    );