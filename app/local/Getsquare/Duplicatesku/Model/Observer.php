<?php


class Getsquare_Duplicatesku_Model_Observer
{
    /**
     * Prepare product for duplicate action.
     *
     * @param Varien_Event_Observer $observer
     * @return object
     */

public function duplicate(Varien_Event_Observer $observer) {

    $stamp = date("Ymdhis");

    $product=$observer->getEvent()->getNewProduct();
    $product->setSku("Unique-sku-" . $stamp);

    return $this;
}
}