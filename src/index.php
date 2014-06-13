<?php

require 'Autoloading/Autoloader.php';
use Html\HtmlElement;
use Html\HtmlRenderer;
use Autoloading\Autoloader;
use Html\HtmlMultiElement;
$Autoloader->register();

$link=new HtmlElement(
'a',
['href' => 'http://www.google.com.mx'],
'Google'
};
$renderer = new HtmlRenderer();
echo $renderer->render($link);
echo $link->tag;
$link->content = 'Yahoo';
echo $rebnderer->render($link);
$list = new HtmlMultielement('ul');
$list->addChild(new Htmlelement('li',[],'PHP'));
$list->addChild(new Htmlelement('li',[],'Java'));
$list->addChild(new Htmlelement('li',[],'C#'));
$list->addChild(new Htmlelement('li',[],'Scala'));
echo $rebnderer->render($link);