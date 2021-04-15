<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

/**
 * @category   Syswatis
 * @package    SySwatis_DisplayPrices
 * @subpackage Model
 * @author SySwatis (Stéphane JIMENEZ)
 * @copyright Copyright (c) 2020 SySwatis (http://www.syswatis.com)
 */
namespace Syswatis\MagicPrice\Model\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class RemoveBlock implements ObserverInterface
{

    public function execute(Observer $observer)
    {
        $layout = $observer->getLayout();
        $block = $layout->getBlock('checkout.cart.coupon');
 
        if ($block) {
            //you can apply or add you condition here.
            $layout->unsetElement('checkout.cart.coupon');
        }
    }
}