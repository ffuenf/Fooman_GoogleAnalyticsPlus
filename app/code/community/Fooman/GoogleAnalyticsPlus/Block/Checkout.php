<?php
/**
 * Fooman_GoogleAnalyticsPlus
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the H&O Commercial License
 * that is bundled with this package in the file LICENSE_HO.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.h-o.nl/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@h-o.com so we can send you a copy immediately.
 *
 * @category    Fooman
 * @package     Fooman_GoogleAnalyticsPlus
 * @copyright   Copyright © 2012 H&O (http://www.h-o.nl/)
 * @license     H&O Commercial License (http://www.h-o.nl/license)
 * @author      Paul Hachmang – H&O <info@h-o.nl>
 *
 *
 */
class Fooman_GoogleAnalyticsPlus_Block_Checkout extends Mage_Core_Block_Template
{
    /**
     * Return REQUEST_URI for current page
     * Magento default analytics reports can include the same page as
     * /checkout/onepage/index/ and   /checkout/onepage/
     * filter out index/ here
     *
     * @return string
     */
    public function getPageName() {
        if (!$this->hasData('page_name')) {
            $pageName = Mage::getSingleton('core/url')->escape($_SERVER['REQUEST_URI']);
            $pageName = rtrim(str_replace('index/','',$pageName), '/');
            $this->setPageName($pageName);
        }
        return $this->getData('page_name');
    }


    public function hasSecondAccount()
    {
        return !! Mage::helper('googleanalyticsplus')->getGoogleanalyticsplusStoreConfig('accountnumber2');
    }
}