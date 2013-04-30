Kohana-CKEditor
===============

integration module of CKEditor for Kohana 3.3

## Exaple
In you controller:
```php
class Controller_Abstract extends Controller_Template
{
    public $template = 'layouts/main';

    function before()
    {
        parent::before();
		$this->template->editor = '';
    }
    function after()
    {
    	$this->template->editor = Ckeditor::instance();

    	parent::after();
    }
```
<br />
In you 'layouts/main.php' file add:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Cool site</title>
</head>
<body>
    <?php echo $editor->editor('name', 'Lorem ipsum...', array('width' => 400)); ?>
</body>
</html>
```