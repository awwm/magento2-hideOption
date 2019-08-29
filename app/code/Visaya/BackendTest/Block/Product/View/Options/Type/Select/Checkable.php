<?php

namespace Visaya\BackendTest\Block\Product\View\Options\Type\Select;

use Magento\Catalog\Api\Data\ProductCustomOptionValuesInterface;
use Magento\Catalog\Block\Product\View\Options\AbstractOptions;
use Magento\Catalog\Model\Product\Option;

/**
 * Represent needed logic for checkbox and radio button option types
 */
class Checkable extends \Magento\Catalog\Block\Product\View\Options\Type\Select\Checkable
{
    /**
     * @var string
     */
    protected $_template = 'Visaya_BackendTest::product/composite/fieldset/options/view/checkable.phtml';
}
