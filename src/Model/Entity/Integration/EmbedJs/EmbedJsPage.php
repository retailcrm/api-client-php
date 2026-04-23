<?php

/**
 * PHP version 7.3
 *
 * @category EmbedJsPage
 * @package  RetailCrm\Api\Model\Entity\Integration\EmbedJs
 */

namespace RetailCrm\Api\Model\Entity\Integration\EmbedJs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class EmbedJsPage
 *
 * @category EmbedJsPage
 * @package  RetailCrm\Api\Model\Entity\Integration\EmbedJs
 */
class EmbedJsPage
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string|null
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("menu")
     */
    public $menu;

    /**
     * @var string|null
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("parentMenuItemCode")
     */
    public $parentMenuItemCode;

    /**
     * @var int|null
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("menuItemOrdering")
     */
    public $menuItemOrdering;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\EmbedJs\EmbedJsTranslation|null
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\EmbedJs\EmbedJsTranslation")
     * @JMS\SerializedName("menuItemTitle")
     */
    public $menuItemTitle;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\EmbedJs\EmbedJsTranslation|null
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\EmbedJs\EmbedJsTranslation")
     * @JMS\SerializedName("pageHelpLink")
     */
    public $pageHelpLink;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isSettingsMainPage")
     */
    public $isSettingsMainPage;
}
