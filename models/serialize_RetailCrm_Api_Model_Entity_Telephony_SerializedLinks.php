<?php

function serialize_RetailCrm_Api_Model_Entity_Telephony_SerializedLinks(RetailCrm\Api\Model\Entity\Telephony\SerializedLinks $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->newOrderLink) {
    $jsonData["newOrderLink"] = $model->newOrderLink;
}
if (null !== $model->lastOrderLink) {
    $jsonData["lastOrderLink"] = $model->lastOrderLink;
}
if (null !== $model->newCustomerLink) {
    $jsonData["newCustomerLink"] = $model->newCustomerLink;
}
if (null !== $model->customerLink) {
    $jsonData["customerLink"] = $model->customerLink;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
