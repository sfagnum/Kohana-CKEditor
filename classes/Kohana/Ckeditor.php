<?php defined('SYSPATH') or die('No direct script access.');

abstract class Kohana_Ckeditor
{
    private static $_instance;

    public static function instance()
    {
        if (! isset(self::$_instance))
        {
            $config = Kohana::$config->load('ckeditor')->as_array();
            self::$_instance = new Editor_Ckeditor($config['base_path']);
            self::$_instance->config = $config['config'];

        }
        return self::$_instance;
    }
}