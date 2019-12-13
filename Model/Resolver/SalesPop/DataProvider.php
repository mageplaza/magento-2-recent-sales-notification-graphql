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
 * @package     Mageplaza_SalesPopGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
declare(strict_types=1);

namespace Mageplaza\SalesPopGraphQl\Model\Resolver\SalesPop;

use Magento\Framework\Exception\NoSuchEntityException;
use Mageplaza\SalesPop\Api\Data\SalesPopInterface;
use Mageplaza\SalesPop\Api\SalesPopRepositoryInterface;

/**
 * Class DataProvider
 * @package Mageplaza\SalesPopGraphQl\Model\Resolver\SalesPop
 */
class DataProvider
{
    /**
     * @var SalesPopRepositoryInterface
     */
    protected $salesPopRepository;

    /**
     * DataProvider constructor.
     *
     * @param SalesPopRepositoryInterface $salesPopRepository
     */
    public function __construct(
        SalesPopRepositoryInterface $salesPopRepository
    ) {
        $this->salesPopRepository = $salesPopRepository;
    }

    /**
     * Get the salespop data
     *
     * @param int $popId
     *
     * @return SalesPopInterface
     * @throws NoSuchEntityException
     */
    public function getData(int $popId): SalesPopInterface
    {
        return $this->salesPopRepository->getById($popId);
    }

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->salesPopRepository->getList();
    }
}
