<?php
require_once('vendor\autoloader.php');
use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
$connectionString = "UseDevelopmentStorage=true";
$tableRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
?>
