<?php
/**
 *
 *
 * @author  Ross Knight (getsquare.co.uk)
 * @copyright  Copyright (c) 2014 GetSquare
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
class Getsquare_Duplicatesku_Model_Observer
{
    /**
     * Prepare product for duplicate action.
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */

    public function duplicate(Varien_Event_Observer $observer) 
    {
        $stamp = date('Ymdhis');
        $product = $observer->getEvent()->getNewProduct();
        $product->setSku('Unique-sku-' . $stamp);
    }
}
