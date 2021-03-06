<?php
/**
 * Yireo FormApi for Magento
 *
 * @package     Yireo_FormApi
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

/**
 * FormApi helper
 */
class Yireo_FormApi_Helper_Field extends Mage_Core_Helper_Abstract
{
    public function toAttributeString($attributes)
    {
        $attributeStrings = array();
        foreach($attributes as $name => $value) {
            if($value !== null) {
                $attributeStrings[] = $name.'="'.$value.'"';
            }
        }

        return implode(' ', $attributeStrings);
    }
}
