<?php

function serialize_RetailCrm_Api_Model_Response_Loyalty_LoyaltyAccountCreateResponse(RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountCreateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->loyalty_account) {
    $jsonData["loyalty_account"] = [];
if (null !== $model->loyalty_account->active) {
    $jsonData["loyalty_account"]["active"] = $model->loyalty_account->active;
}
if (null !== $model->loyalty_account->id) {
    $jsonData["loyalty_account"]["id"] = $model->loyalty_account->id;
}
if (null !== $model->loyalty_account->phoneNumber) {
    $jsonData["loyalty_account"]["phoneNumber"] = $model->loyalty_account->phoneNumber;
}
if (null !== $model->loyalty_account->cardNumber) {
    $jsonData["loyalty_account"]["cardNumber"] = $model->loyalty_account->cardNumber;
}
if (null !== $model->loyalty_account->amount) {
    $jsonData["loyalty_account"]["amount"] = $model->loyalty_account->amount;
}
if (null !== $model->loyalty_account->createdAt) {
    $jsonData["loyalty_account"]["createdAt"] = $model->loyalty_account->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyalty_account->activatedAt) {
    $jsonData["loyalty_account"]["activatedAt"] = $model->loyalty_account->activatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyalty_account->confirmedPhoneAt) {
    $jsonData["loyalty_account"]["confirmedPhoneAt"] = $model->loyalty_account->confirmedPhoneAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyalty_account->lastCheckId) {
    $jsonData["loyalty_account"]["lastCheckId"] = $model->loyalty_account->lastCheckId;
}
if (null !== $model->loyalty_account->customFields) {
    $jsonData["loyalty_account"]["customFields"] = [];
foreach (array_keys($model->loyalty_account->customFields) as $index35) {
    $jsonData["loyalty_account"]["customFields"] = $model->loyalty_account->customFields;
}

}
if (null !== $model->loyalty_account->customer) {
    $jsonData["loyalty_account"]["customer"] = [];
if (null !== $model->loyalty_account->customer->site) {
    $jsonData["loyalty_account"]["customer"]["site"] = $model->loyalty_account->customer->site;
}
if (null !== $model->loyalty_account->customer->id) {
    $jsonData["loyalty_account"]["customer"]["id"] = $model->loyalty_account->customer->id;
}
if (null !== $model->loyalty_account->customer->externalId) {
    $jsonData["loyalty_account"]["customer"]["externalId"] = $model->loyalty_account->customer->externalId;
}
if (null !== $model->loyalty_account->customer->type) {
    $jsonData["loyalty_account"]["customer"]["type"] = $model->loyalty_account->customer->type;
}

if (0 === \count($jsonData["loyalty_account"]["customer"])) {
    $jsonData["loyalty_account"]["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["loyalty_account"])) {
    $jsonData["loyalty_account"] = $emptyObject;
}

}
if (null !== $model->warnings) {
    $jsonData["warnings"] = [];
foreach (array_keys($model->warnings) as $index12) {
    $jsonData["warnings"] = $model->warnings;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
