<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_LoyaltyAccount(RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->phoneNumber) {
    $jsonData["phoneNumber"] = $model->phoneNumber;
}
if (null !== $model->cardNumber) {
    $jsonData["cardNumber"] = $model->cardNumber;
}
if (null !== $model->amount) {
    $jsonData["amount"] = $model->amount;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->activatedAt) {
    $jsonData["activatedAt"] = $model->activatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->confirmedPhoneAt) {
    $jsonData["confirmedPhoneAt"] = $model->confirmedPhoneAt->format('Y-m-d H:i:s');;
}
if (null !== $model->lastCheckId) {
    $jsonData["lastCheckId"] = $model->lastCheckId;
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
