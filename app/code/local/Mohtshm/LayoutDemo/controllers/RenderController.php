<?php

class Mohtshm_LayoutDemo_RenderController extends Mage_Core_Controller_Front_Action
{
	public function blockAction()
	{
		$this->getResponse()->setBody('Customization by Mohtshm');
	}
	public function overrideAction()
	{
		$htmlblock = $this->getLayout()
						  ->createBlock('mohtshm_layoutdemo/custom');
		//echo get_class($htmlblock).' see any things';				   
				$this->getResponse()->setBody($htmlblock-> toHtml());	 
	}
}


?>