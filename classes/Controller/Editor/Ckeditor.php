<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: sfagnum
 * Date: 30.04.13
 * Time: 17:40
 * To change this template use File | Settings | File Templates.
 */

class Controller_Editor_Ckeditor extends Controller
{
    function action_index()
    {
        $file = $this->request->param('file');

        $ext = pathinfo($file, PATHINFO_EXTENSION);

        $file = substr($file, 0, - (strlen($ext) + 1));
        if ($file = Kohana::find_file('vendor/ckeditor', $file, $ext))
        {

            // Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
            $this->check_cache(sha1($this->request->uri()).filemtime($file));

            // Send the file content as the response
            $this->response->body(file_get_contents($file));

            // Set the proper headers to allow caching

            $this->response->headers('content-type', File::mime_by_ext($ext));
            $this->response->headers('last-modified', date('r', filemtime($file)));

        }
        else
        {
            // Return a 404 status
            $this->response->status(404);
        }
    }
}
