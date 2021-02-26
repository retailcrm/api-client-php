<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedLoyaltyOrder(RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyaltyOrder $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->bonusesCreditTotal) {
    $jsonData["bonusesCreditTotal"] = $model->bonusesCreditTotal;
}
if (null !== $model->bonusesChargeTotal) {
    $jsonData["bonusesChargeTotal"] = $model->bonusesChargeTotal;
}
if (null !== $model->privilegeType) {
    $jsonData["privilegeType"] = $model->privilegeType;
}
if (null !== $model->totalSumm) {
    $jsonData["totalSumm"] = $model->totalSumm;
}
if (null !== $model->personalDiscountPercent) {
    $jsonData["personalDiscountPercent"] = $model->personalDiscountPercent;
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
if (null !== $model->loyaltyLevel) {
    $jsonData["loyaltyLevel"] = [];
if (null !== $model->loyaltyLevel->id) {
    $jsonData["loyaltyLevel"]["id"] = $model->loyaltyLevel->id;
}
if (null !== $model->loyaltyLevel->name) {
    $jsonData["loyaltyLevel"]["name"] = $model->loyaltyLevel->name;
}

if (0 === \count($jsonData["loyaltyLevel"])) {
    $jsonData["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->loyaltyEvent) {
    $jsonData["loyaltyEvent"] = [];
if (null !== $model->loyaltyEvent->id) {
    $jsonData["loyaltyEvent"]["id"] = $model->loyaltyEvent->id;
}

if (0 === \count($jsonData["loyaltyEvent"])) {
    $jsonData["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->personalDiscount) {
    $jsonData["customer"]["personalDiscount"] = $model->customer->personalDiscount;
}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

}
if (null !== $model->delivery) {
    $jsonData["delivery"] = [];
if (null !== $model->delivery->cost) {
    $jsonData["delivery"]["cost"] = $model->delivery->cost;
}

if (0 === \count($jsonData["delivery"])) {
    $jsonData["delivery"] = $emptyObject;
}

}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->items) {
    $jsonData["items"] = [];
foreach (array_keys($model->items) as $index9) {
    $jsonData["items"][$index9] = [];
if (null !== $model->items[$index9]->bonusesChargeTotal) {
    $jsonData["items"][$index9]["bonusesChargeTotal"] = $model->items[$index9]->bonusesChargeTotal;
}
if (null !== $model->items[$index9]->bonusesCreditTotal) {
    $jsonData["items"][$index9]["bonusesCreditTotal"] = $model->items[$index9]->bonusesCreditTotal;
}
if (null !== $model->items[$index9]->priceType) {
    $jsonData["items"][$index9]["priceType"] = [];
if (null !== $model->items[$index9]->priceType->code) {
    $jsonData["items"][$index9]["priceType"]["code"] = $model->items[$index9]->priceType->code;
}

if (0 === \count($jsonData["items"][$index9]["priceType"])) {
    $jsonData["items"][$index9]["priceType"] = $emptyObject;
}

}
if (null !== $model->items[$index9]->initialPrice) {
    $jsonData["items"][$index9]["initialPrice"] = $model->items[$index9]->initialPrice;
}
if (null !== $model->items[$index9]->discountTotal) {
    $jsonData["items"][$index9]["discountTotal"] = $model->items[$index9]->discountTotal;
}
if (null !== $model->items[$index9]->prices) {
    $jsonData["items"][$index9]["prices"] = [];
foreach (array_keys($model->items[$index9]->prices) as $index28) {
    $jsonData["items"][$index9]["prices"][$index28] = [];
if (null !== $model->items[$index9]->prices[$index28]->price) {
    $jsonData["items"][$index9]["prices"][$index28]["price"] = $model->items[$index9]->prices[$index28]->price;
}
if (null !== $model->items[$index9]->prices[$index28]->quantity) {
    $jsonData["items"][$index9]["prices"][$index28]["quantity"] = $model->items[$index9]->prices[$index28]->quantity;
}

if (0 === \count($jsonData["items"][$index9]["prices"][$index28])) {
    $jsonData["items"][$index9]["prices"][$index28] = $emptyObject;
}

}

}
if (null !== $model->items[$index9]->vatRate) {
    $jsonData["items"][$index9]["vatRate"] = $model->items[$index9]->vatRate;
}
if (null !== $model->items[$index9]->quantity) {
    $jsonData["items"][$index9]["quantity"] = $model->items[$index9]->quantity;
}

if (0 === \count($jsonData["items"][$index9])) {
    $jsonData["items"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
