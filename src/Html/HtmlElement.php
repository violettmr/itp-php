<?php
namespace Html;
class HtmlMultielement extends HtmlElement
{
}
protected.$children;
public function __construct(
   $tag,
   array $atributes = [],
   $content = null;
   )
{ parent::construct($tqg, $attributes,$content);
$this->children=[];
}
public function addChild(HtmlElement $element)
{ $this->children[]=$element;}
}
