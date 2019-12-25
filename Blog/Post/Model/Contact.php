<?php
namespace Blog\Post\Model;

class Contact extends \Magento\Framework\Model\AbstractModel implements 
					\Magento\Framework\DataObject\IdentityInterface,
					\Blog\Post\Api\Data\ContactInterface
{
	const CACHE_TAG = 'aht_blog_contact';

	protected $_cacheTag = 'aht_blog_contact';
	protected $_eventPrefix = 'aht_blog_contact';

	public function _construct()
	{
		$this->_init('Blog\Post\Model\ResourceModel\Contact');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];
		return $values;
	}
}
