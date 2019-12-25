<?php
namespace Blog\Post\Model\Contact;

use Blog\Post\Model\ResourceModel\Contact\CollectionFactory;
use Blog\Post\Model\Contact;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
	protected $collection;
	protected $_loaderData;

	public function __construct(
		$name,
		$primaryFieldName,
		$requestFieldName,
		CollectionFactory $contactCollectionFactory,
		array $meta = [],
		array $data = []
	)
	{
		$this->collection = $contactCollectionFactory->create();
		parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
	}

	public function getData()
	{
		if(isset($this->_loaderData)) {
			return $this->_loaderData;
		}

		$items = $this->collection->getItems();

		foreach ($items as $contact) {
			$this->_loaderData[$contact->getId()] = $contact->getData();
		}

		return $this->_loaderData;
	}
}
