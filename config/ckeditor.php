<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'base_path' => URL::base().'modules/ckeditor/',
    'config' => array(
        'language' => 'ru',
        'toolbar' => array(
            array('Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'),
            array('Source', '-', 'Save' ),
            array('Image', 'Flash', 'Table', 'HorizontalRule'),
            array('TextColor', 'BGColor'),
            array('Link', 'Unlink'),
            '/',
            array('Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'),
            array('NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'),
            array('Format', 'Font', 'FontSize')
        ),
        'width' => 650,
        'height' => 250
    )
);
