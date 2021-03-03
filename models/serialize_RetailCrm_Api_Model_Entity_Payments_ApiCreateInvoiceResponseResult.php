<?php

function serialize_RetailCrm_Api_Model_Entity_Payments_ApiCreateInvoiceResponseResult(RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceResponseResult $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->link) {
    $jsonData["link"] = $model->link;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
