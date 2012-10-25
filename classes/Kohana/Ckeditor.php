<?php defined('SYSPATH') or die('No direct script access.');

abstract class Kohana_Ckeditor
{
    private static $_instance;

    public static function instance()
    {
        if ( ! isset(self::$_instance))
        {
            $file = Kohana::find_file('vendor', 'ckeditor/ckeditor_php5');

            if (file_exists($file))
            {
                $config = Kohana::$config->load('kckeditor')->as_array();
                include_once $file;
                self::$_instance = new CKEditor($config['base_path']);
                self::$_instance->config = $config['config'];
            }
            else
            {
                throw new Kohana_Exception("Can't find file ckeditor_php5.php") ;
            }
        }
        return self::$_instance;
    }
}
