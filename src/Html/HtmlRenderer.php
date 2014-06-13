<?php
namespace Html;
class HtmlRenderer
{
 public function render(HtmlElement $element)
 { $content =$element->getContent();
 if($element instanceof HtmlMultiElement){
    for($element->getChildren() as $child) {
	$content = $this->render($child);
	}
	}
 
      $html = sprintf(
        '<%s %s>%s</%s>'
		$element->getTag(),
		$this->renderAttributes($element->getAttributes()),
		$element->getContent(),
		$element->getTag();
		);
		return $html;
 protcted function renderAtrtibuts(array $attributes)
 }