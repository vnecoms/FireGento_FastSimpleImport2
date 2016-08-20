<?php
/**
 * Copyright © 2016 FireGento e.V. - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace FireGento\FastSimpleImport\Helper;

class Config extends \Magento\Framework\App\Helper\AbstractHelper
{

    const XML_PATH_BEHAVIOR         = 'fastsimpleimport/default/behavior';
    const XML_PATH_ENTITY           = 'fastsimpleimport/default/entity';
    const XML_PATH_VALIDATION_STRATEGY = 'fastsimpleimport/default/validation_strategy';
    const XML_PATH_ALLOWED_ERROR_COUNT = 'fastsimpleimport/default/allowed_error_count';
    const XML_PATH_IMPORT_IMAGES_FILE_FIR = 'fastsimpleimport/default/import_images_file_dir';

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @return string
     */
    public function getBehavior()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_BEHAVIOR,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ENTITY,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getValidationStrategy()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_VALIDATION_STRATEGY,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getAllowedErrorCount()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ALLOWED_ERROR_COUNT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getImportFileDir()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_IMPORT_IMAGES_FILE_FIR,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}