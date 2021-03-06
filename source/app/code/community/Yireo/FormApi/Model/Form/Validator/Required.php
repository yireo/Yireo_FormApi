<?php
/**
 * Yireo FormApi for Magento
 *
 * @package     Yireo_FormApi
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

class Yireo_FormApi_Model_Form_Validator_Required extends Yireo_FormApi_Model_Form_Validator_Abstract
{
    public function validate($data)
    {
        if(empty($data)) {
            $this->errors[] = '%s is required';
            return false;
        }
        return true;
    }

    public function getProperties()
    {
        return array(
            'required' => 1,
            'class' => 'required_entry',
        );
    }
}
