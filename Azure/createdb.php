<h1>Hi</h1>
<?php
require_once('init.php');
try
{
    $tableRestProxy -> createTable("tasks"); 
    echo 'Done';  
}
catch(serviceException $c)
{
    echo $c->getCode().' '.$c->getMessage();
    echo 'Error';  
}

?>
