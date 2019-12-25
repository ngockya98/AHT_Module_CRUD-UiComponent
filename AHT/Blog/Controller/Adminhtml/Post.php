<?php
namespace AHT\Blog\Controller\Adminhtml;

abstract class Post extends \Magento\Backend\App\Action
{
	protected function _initAction()
	{
		$this->_view->loadLayout();
		$this->_setActiveMenu(
			'AHT_Blog::blog'
		)->_addBreadcrumb(
			__('Blog'),
            __('Blog')
		);
		return $this;
	}

	protected function _isAllowed()
	{
		return $this->_authorization->isAllowed('AHT_Blog::blog');
	}
}
