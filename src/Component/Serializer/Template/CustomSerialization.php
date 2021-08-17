<?php

/**
 * PHP version 7.3
 *
 * @category CustomSerialization
 * @package  RetailCrm\Api\Component\Serializer\Template
 */

namespace RetailCrm\Api\Component\Serializer\Template;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * Class CustomSerialization
 *
 * @category CustomSerialization
 * @package  RetailCrm\Api\Component\Serializer\Template
 * @internal
 */
class CustomSerialization extends AbstractTemplate
{
    private const TMPL_CUSTOMER_INTERFACE = <<<'EOT'
$jsonData{{jsonPath}} = [];

if ({{modelPath}} instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    {{customerCode}}
} elseif ({{modelPath}} instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    {{corporateCode}}
} elseif ({{modelPath}} instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer) {
    {{serializedRelationAbstractCode}}
} elseif ({{modelPath}} instanceof \RetailCrm\Api\Model\Entity\Orders\SerializedRelationCustomer) {
    {{serializedRelationCode}}
}

if (0 === \count($jsonData{{jsonPath}})) {
    $jsonData{{jsonPath}} = $emptyObject;
}
EOT;

    /**
     * @param string $jsonPath
     * @param string $modelPath
     * @param string $customerCode
     * @param string $corporateCode
     * @param string $relationAbstractCode
     * @param string $relationCode
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\SyntaxError
     */
    public function renderCustomerInterface(
        string $jsonPath,
        string $modelPath,
        string $customerCode,
        string $corporateCode,
        string $relationAbstractCode,
        string $relationCode
    ): string {
        return $this->render(self::TMPL_CUSTOMER_INTERFACE, [
            'jsonPath' => $jsonPath,
            'modelPath' => $modelPath,
            'customerCode' => $customerCode,
            'corporateCode' => $corporateCode,
            'serializedRelationAbstractCode' => $relationAbstractCode,
            'serializedRelationCode' => $relationCode,
        ]);
    }
}
