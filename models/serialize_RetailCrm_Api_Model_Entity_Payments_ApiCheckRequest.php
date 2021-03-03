<?php

function serialize_RetailCrm_Api_Model_Entity_Payments_ApiCheckRequest(RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->invoiceUuid) {
    $jsonData["invoiceUuid"] = $model->invoiceUuid;
}
if (null !== $model->amount) {
    $jsonData["amount"] = $model->amount;
}
if (null !== $model->currency) {
    $jsonData["currency"] = $model->currency;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
