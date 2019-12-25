<?php
namespace AHT\Blog\Controller\Index;

class Edit extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_postFactory;
	protected $_postRepository;
	protected $_coreRigistry;

	public function __construct(
			\Magento\Framework\App\Action\Context $context,
			\Magento\Framework\View\Result\PageFactory $pageFactory,
			\AHT\Blog\Model\PostFactory $postFactory,
			\AHT\Blog\Model\PostRepository $postRepository,
			\Magento\Framework\Registry $coreRegistry)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		$this->_postRepository = $postRepository;
		$this->_coreRigistry = $coreRegistry;

		return parent::__construct($context);
	}

	public function execute()
	{
		$post_id = $this->getRequest()->getParam('post_id');
		$this->_coreRigistry->register('post_id', $post_id);
		return $this->_pageFactory->create();
	}
}