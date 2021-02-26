<?php

function serialize_RetailCrm_Api_Model_Response_Loyalty_LoyaltyAccountActivateResponse(RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountActivateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->loyaltyAccount) {
    $jsonData["loyaltyAccount"] = [];
if (null !== $model->loyaltyAccount->active) {
    $jsonData["loyaltyAccount"]["active"] = $model->loyaltyAccount->active;
}
if (null !== $model->loyaltyAccount->id) {
    $jsonData["loyaltyAccount"]["id"] = $model->loyaltyAccount->id;
}
if (null !== $model->loyaltyAccount->phoneNumber) {
    $jsonData["loyaltyAccount"]["phoneNumber"] = $model->loyaltyAccount->phoneNumber;
}
if (null !== $model->loyaltyAccount->cardNumber) {
    $jsonData["loyaltyAccount"]["cardNumber"] = $model->loyaltyAccount->cardNumber;
}
if (null !== $model->loyaltyAccount->amount) {
    $jsonData["loyaltyAccount"]["amount"] = $model->loyaltyAccount->amount;
}
if (null !== $model->loyaltyAccount->createdAt) {
    $jsonData["loyaltyAccount"]["createdAt"] = $model->loyaltyAccount->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccount->activatedAt) {
    $jsonData["loyaltyAccount"]["activatedAt"] = $model->loyaltyAccount->activatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccount->confirmedPhoneAt) {
    $jsonData["loyaltyAccount"]["confirmedPhoneAt"] = $model->loyaltyAccount->confirmedPhoneAt->format('Y-m-d H:i:s');;
}
if (null !== $model->loyaltyAccount->lastCheckId) {
    $jsonData["loyaltyAccount"]["lastCheckId"] = $model->loyaltyAccount->lastCheckId;
}
if (null !== $model->loyaltyAccount->customFields) {
    $jsonData["loyaltyAccount"]["customFields"] = [];
foreach (array_keys($model->loyaltyAccount->customFields) as $index34) {
    $jsonData["loyaltyAccount"]["customFields"] = $model->loyaltyAccount->customFields;
}

}
if (null !== $model->loyaltyAccount->customer) {
    $jsonData["loyaltyAccount"]["customer"] = [];
if (null !== $model->loyaltyAccount->customer->site) {
    $jsonData["loyaltyAccount"]["customer"]["site"] = $model->loyaltyAccount->customer->site;
}
if (null !== $model->loyaltyAccount->customer->id) {
    $jsonData["loyaltyAccount"]["customer"]["id"] = $model->loyaltyAccount->customer->id;
}
if (null !== $model->loyaltyAccount->customer->externalId) {
    $jsonData["loyaltyAccount"]["customer"]["externalId"] = $model->loyaltyAccount->customer->externalId;
}
if (null !== $model->loyaltyAccount->customer->type) {
    $jsonData["loyaltyAccount"]["customer"]["type"] = $model->loyaltyAccount->customer->type;
}

if (0 === \count($jsonData["loyaltyAccount"]["customer"])) {
    $jsonData["loyaltyAccount"]["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["loyaltyAccount"])) {
    $jsonData["loyaltyAccount"] = $emptyObject;
}

}
if (null !== $model->verification) {
    $jsonData["verification"] = [];
if (null !== $model->verification->createdAt) {
    $jsonData["verification"]["createdAt"] = $model->verification->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->verification->expiredAt) {
    $jsonData["verification"]["expiredAt"] = $model->verification->expiredAt->format('Y-m-d H:i:s');;
}
if (null !== $model->verification->verifiedAt) {
    $jsonData["verification"]["verifiedAt"] = $model->verification->verifiedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->verification->checkId) {
    $jsonData["verification"]["checkId"] = $model->verification->checkId;
}
if (null !== $model->verification->actionType) {
    $jsonData["verification"]["actionType"] = $model->verification->actionType;
}

if (0 === \count($jsonData["verification"])) {
    $jsonData["verification"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
