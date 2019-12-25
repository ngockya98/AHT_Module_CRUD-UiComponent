<?php
namespace Blog\Post\Controller\Adminhtml\Index;

class NewAction extends \Magento\Backend\App\Action
{
	const ADMIN_RESOURCE = 'Index';

	protected $resultPageFactory;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	)
	{
		$this->resultPageFactory = $pageFactory;
		parent::__construct($context);
	}

	public function execute()
	{
		return $this->resultPageFactory->create();
	}
}
