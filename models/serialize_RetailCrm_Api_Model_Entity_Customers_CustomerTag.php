<?php

function serialize_RetailCrm_Api_Model_Entity_Customers_CustomerTag(RetailCrm\Api\Model\Entity\Customers\CustomerTag $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = $model->name;

    return $jsonData;
}
