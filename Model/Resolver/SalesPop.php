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

namespace Mageplaza\SalesPopGraphQl\Model\Resolver;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Mageplaza\SalesPopGraphQl\Model\Resolver\SalesPop\DataProvider;

/**
 * Class SalesPop
 * @package Mageplaza\SalesPopGraphQl\Model\Resolver
 */
class SalesPop implements ResolverInterface
{
    /**
     * @var DataProvider
     */
    protected $dataProvider;

    /**
     * SalesPop constructor.
     *
     * @param DataProvider $dataProvider
     */
    public function __construct(DataProvider $dataProvider)
    {
        $this->dataProvider = $dataProvider;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $ids = $this->getIds($args);

        $popsData = $this->getPopsData($ids);

        return [
            'items' => $popsData,
        ];
    }

    /**
     * Get block identifiers
     *
     * @param array $args
     * @return string[]
     * @throws GraphQlInputException
     */
    private function getIds(array $args): array
    {
        if (!isset($args['ids']) || !is_array($args['ids'])) {
            throw new GraphQlInputException(__('"ids" of Salespop should be specified'));
        }

        return $args['ids'];
    }

    /**
     * Get blocks data
     *
     * @param array $ids
     * @return array
     */
    private function getPopsData(array $ids): array
    {
        $popsData = [];
        if (count($ids) === 0) {
            return $this->dataProvider->getList();
        }

        foreach ($ids as $popId) {
            try {
                $popsData[$popId] = $this->dataProvider->getData($popId);
            } catch (NoSuchEntityException $e) {
                $popsData[$popId] = new GraphQlNoSuchEntityException(__($e->getMessage()), $e);
            }
        }

        return $popsData;
    }
}
