<?php
/**
 * Yireo FormApi for Magento
 *
 * @package     Yireo_FormApi
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

class Yireo_FormApi_Model_Form_Field_CmsPage extends Yireo_FormApi_Model_Form_Field_Select
{
    public function getOptions()
    {
        $options = array();
        $pages = Mage::getModel('cms/page')->getCollection();
        foreach($pages as $page) {
            $options[] = array(
                'value' => $page->getId(),
                'label' => $page->getTitle(),
            );
        }

        if ($this->getData('empty') == 1) {
            array_unshift($options, array(
                'value' => 0,
                'label' => Mage::helper('formapi')->__('None'),
            ));
        }

        return $options;
    }
}