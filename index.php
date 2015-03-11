<?php
//Instantiate slim aplication 
$app = new \Slim\Slim();

//HTTP GET route
$app->get('/',
	function(){
	$template = <<<EOT
	<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Slim Framework for PHP 5</title>
        
});
$app->run();
?>