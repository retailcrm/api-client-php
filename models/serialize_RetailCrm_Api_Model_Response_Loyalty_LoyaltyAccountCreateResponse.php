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
if (null !== $model->loyaltyAccount) {
    $jsonData["loyalty_account"] = [];
if (null !== $model->loyaltyAccount->active) {
    $jsonData["loyalty_account"]["active"] = $model->loyaltyAccount->active;
}
if (null !== $model->loyaltyAccount->id) {
    $jsonData["loyalty_account"]["id"] = $model->loyaltyAccount->id;
}
if (null !== $model->loyaltyAccount->phoneNumber) {
    $jsonData["loyalty_account"]["phoneNumber"] = $model->loyaltyAccount->phoneNumber;
}
if (null !== $model->loyaltyAccount->cardNumber) {
    $jsonData["loyalty_account"]["cardNumber"] = $model->loyaltyAccount->cardNumber;
}
if (null !== $model->loyaltyAccount->amount) {
    $jsonData["loyalty_account"]["amount"] = $model->loyaltyAccount->amount;
}
if (null !== $model->loyaltyAccount->createdAt) {
    $jsonData["loyalty_account"]["createdAt"] = $model->loyaltyAccount->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccount->activatedAt) {
    $jsonData["loyalty_account"]["activatedAt"] = $model->loyaltyAccount->activatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccount->confirmedPhoneAt) {
    $jsonData["loyalty_account"]["confirmedPhoneAt"] = $model->loyaltyAccount->confirmedPhoneAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccount->lastCheckId) {
    $jsonData["loyalty_account"]["lastCheckId"] = $model->loyaltyAccount->lastCheckId;
}
if (null !== $model->loyaltyAccount->customFields) {
    $jsonData["loyalty_account"]["customFields"] = [];
foreach (array_keys($model->loyaltyAccount->customFields) as $index35) {
    $jsonData["loyalty_account"]["customFields"] = $model->loyaltyAccount->customFields;
}

}
if (null !== $model->loyaltyAccount->customer) {
    $jsonData["loyalty_account"]["customer"] = [];
if (null !== $model->loyaltyAccount->customer->site) {
    $jsonData["loyalty_account"]["customer"]["site"] = $model->loyaltyAccount->customer->site;
}
if (null !== $model->loyaltyAccount->customer->id) {
    $jsonData["loyalty_account"]["customer"]["id"] = $model->loyaltyAccount->customer->id;
}
if (null !== $model->loyaltyAccount->customer->externalId) {
    $jsonData["loyalty_account"]["customer"]["externalId"] = $model->loyaltyAccount->customer->externalId;
}
if (null !== $model->loyaltyAccount->customer->type) {
    $jsonData["loyalty_account"]["customer"]["type"] = $model->loyaltyAccount->customer->type;
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
