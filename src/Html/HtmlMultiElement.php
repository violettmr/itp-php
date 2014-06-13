<?
namespace Html;
class HtmlMultiElement extends HtmlElement
{
  protected $children;
  public  function __construct(
   $tag,
   array $attributes = [],
   $content =null
   )
   {
    parent::__construct($tag, $attributes,$content);
	$this->children = [];
	}
	public funtion addChild(Htmlelement $element)
	{ $this-children[] =$element;
	}
	public functon getChildren()
	{ return $this->children;
	}