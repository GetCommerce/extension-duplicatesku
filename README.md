# Getsquare_Duplicatesku

Populate SKU when duplicating a product in Mangento admin.

## Compatibility

Tested on 1.7 and above

## Description

After duplicating a product via the backend of Magento it is possible to navigate away leaving the product with an empty SKU (this has the potential to cause subsequent problems). This extension populates the SKU field with a string based on the server time at the time of duplicating whereby the user can ovewrite with an appropriate value. This extension was written after a client identified their workflow resulted in products being generated without SKUS.

## Installation

Download the zip or clone repository and merge with your Magento Installation

## Adapting

Update the Observer.php to set any string value for the SKU or set the value of any other attribute at the time of duplicating a product.
