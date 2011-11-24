<?php

/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    tests
 * @package     selenium
 * @subpackage  tests
 * @author      Magento Core Team <core@magentocommerce.com>
 * @copyright   Copyright (c) 2010 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Helper class
 *
 * @package     selenium
 * @subpackage  tests
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Store_Helper extends Mage_Selenium_TestCase
{

    /**
     * Create Store.
     *
     * Preconditions: 'Manage Stores' is opened.
     * @param array $storeData
     */
    public function createStore($storeData)
    {
        $this->clickButton('create_store');
        $this->fillForm($storeData);
        $this->saveForm('save_store');
    }

    /**
     * Create Store View
     *
     * Preconditions: 'Manage Stores' is opened.
     * @param array $storeViewData
     */
    public function createStoreView($storeViewData)
    {
        $this->clickButton('create_store_view');
        $this->fillForm($storeViewData);
        $this->saveForm('save_store_view');
    }

    /**
     * Create Website
     *
     * Preconditions: 'Manage Stores' is opened.
     * @param array $websiteData
     */
    public function createWebsite($websiteData)
    {
        $this->clickButton('create_website');
        $this->fillForm($websiteData);
        $this->saveForm('save_website');
    }

}