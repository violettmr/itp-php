<?php
class HtmlElement
{
    protected $tag;
    protected $content;
    protected $attributes;
	public function __construct(
	$tag, 
	$attributes =[],
	$content =null
	)
	{
	 $this->tag= $tag;
	 $this->content= $content;
	 $this->attributes = $attributes;
	 }
	 public function __call($name, $arguments)
	 {  if('render' === $name)
	    { $html = sprintf( 
		       '<%s %s>%s</%s>',
			   $this->tag,
			   implode('=',$this->atributes),
			   $this->content,
			   $this->tag
			   );
			   return $html;
		}
	}
	 
		var_dump($name);
		var_dump($arguments);
	 }
}
$link =new HtmlElement(
    'a',
	['ref'=>'http://ww.google.com.mx'],
	'Google'
	);
$link->render(['class' => 'important-link']);

//<a ref="http://ww.google.com.mx">Google</a>
//<span>Nombre</span>
//<br>