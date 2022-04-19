<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_RecentSalesNotificationGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
declare(strict_types=1);

namespace Mageplaza\RecentSalesNotificationGraphQl\Model\Resolver\RecentSalesNotification;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Mageplaza\RecentSalesNotification\Model\ResourceModel\RecentSalesNotification\Collection;
use Mageplaza\RecentSalesNotification\Model\ResourceModel\RecentSalesNotification\CollectionFactory;

/**
 * Class DataProvider
 * @package Mageplaza\RecentSalesNotificationGraphQl\Model\Resolver\RecentSalesNotification
 */
class DataProvider
{
    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * DataProvider constructor.
     *
     * @param CollectionProcessorInterface $collectionProcessor
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionProcessorInterface $collectionProcessor,
        CollectionFactory $collectionFactory
    ) {
        $this->collectionProcessor = $collectionProcessor;
        $this->collectionFactory   = $collectionFactory;
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return Collection
     */
    public function getData(
        SearchCriteriaInterface $searchCriteria
    ): Collection {
        $collection = $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, $collection);

        return $collection;
    }
}
