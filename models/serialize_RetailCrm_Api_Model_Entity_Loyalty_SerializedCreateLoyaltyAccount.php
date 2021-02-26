<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedCreateLoyaltyAccount(RetailCrm\Api\Model\Entity\Loyalty\SerializedCreateLoyaltyAccount $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->phoneNumber) {
    $jsonData["phoneNumber"] = $model->phoneNumber;
}
if (null !== $model->cardNumber) {
    $jsonData["cardNumber"] = $model->cardNumber;
}
if (null !== $model->customFields) {
    $jsonData["customFields"] = [];
foreach (array_keys($model->customFields) as $index16) {
    $jsonData["customFields"] = $model->customFields;
}

}
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
}
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->type) {
    $jsonData["customer"]["type"] = $model->customer->type;
}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
