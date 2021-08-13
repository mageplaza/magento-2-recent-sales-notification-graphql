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

namespace Mageplaza\RecentSalesNotificationGraphQl\Model\Resolver\RecentSalesNotification\FilterArgument;

use Magento\Framework\GraphQl\Query\Resolver\Argument\FieldEntityAttributesInterface;
use Mageplaza\RecentSalesNotification\Helper\Data;

/**
 * Class EntityAttributesForAst
 * @package Mageplaza\RecentSalesNotificationGraphQl\Model\Resolver\RecentSalesNotification\FilterArgument
 */
class EntityAttributesForAst implements FieldEntityAttributesInterface
{
    /**
     * @var array
     */
    protected $additionalAttributes = ['pop_id', 'name', 'status', 'pop_type', 'position'];

    /**
     * @var Data
     */
    protected $helperData;

    /**
     * EntityAttributesForAst constructor.
     *
     * @param Data $helperData
     * @param array $additionalAttributes
     */
    public function __construct(
        Data $helperData,
        array $additionalAttributes = []
    ) {
        $this->helperData           = $helperData;
        $this->additionalAttributes = array_merge($this->additionalAttributes, $additionalAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityAttributes(): array
    {
        $fields = [];
        foreach ($this->additionalAttributes as $attribute) {
            $fields[$attribute] = 'String';
        }

        return $this->helperData->versionCompare('2.3.4') ? $fields : array_keys($fields);
    }
}
