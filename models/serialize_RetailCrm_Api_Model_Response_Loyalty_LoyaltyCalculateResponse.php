<?php

function serialize_RetailCrm_Api_Model_Response_Loyalty_LoyaltyCalculateResponse(RetailCrm\Api\Model\Response\Loyalty\LoyaltyCalculateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->order) {
    $jsonData["order"] = [];
if (null !== $model->order->bonusesCreditTotal) {
    $jsonData["order"]["bonusesCreditTotal"] = $model->order->bonusesCreditTotal;
}
if (null !== $model->order->bonusesChargeTotal) {
    $jsonData["order"]["bonusesChargeTotal"] = $model->order->bonusesChargeTotal;
}
if (null !== $model->order->privilegeType) {
    $jsonData["order"]["privilegeType"] = $model->order->privilegeType;
}
if (null !== $model->order->totalSumm) {
    $jsonData["order"]["totalSumm"] = $model->order->totalSumm;
}
if (null !== $model->order->personalDiscountPercent) {
    $jsonData["order"]["personalDiscountPercent"] = $model->order->personalDiscountPercent;
}
if (null !== $model->order->loyaltyAccount) {
    $jsonData["order"]["loyaltyAccount"] = [];
if (null !== $model->order->loyaltyAccount->active) {
    $jsonData["order"]["loyaltyAccount"]["active"] = $model->order->loyaltyAccount->active;
}
if (null !== $model->order->loyaltyAccount->id) {
    $jsonData["order"]["loyaltyAccount"]["id"] = $model->order->loyaltyAccount->id;
}
if (null !== $model->order->loyaltyAccount->phoneNumber) {
    $jsonData["order"]["loyaltyAccount"]["phoneNumber"] = $model->order->loyaltyAccount->phoneNumber;
}
if (null !== $model->order->loyaltyAccount->cardNumber) {
    $jsonData["order"]["loyaltyAccount"]["cardNumber"] = $model->order->loyaltyAccount->cardNumber;
}
if (null !== $model->order->loyaltyAccount->amount) {
    $jsonData["order"]["loyaltyAccount"]["amount"] = $model->order->loyaltyAccount->amount;
}
if (null !== $model->order->loyaltyAccount->createdAt) {
    $jsonData["order"]["loyaltyAccount"]["createdAt"] = $model->order->loyaltyAccount->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->loyaltyAccount->activatedAt) {
    $jsonData["order"]["loyaltyAccount"]["activatedAt"] = $model->order->loyaltyAccount->activatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->loyaltyAccount->confirmedPhoneAt) {
    $jsonData["order"]["loyaltyAccount"]["confirmedPhoneAt"] = $model->order->loyaltyAccount->confirmedPhoneAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->loyaltyAccount->lastCheckId) {
    $jsonData["order"]["loyaltyAccount"]["lastCheckId"] = $model->order->loyaltyAccount->lastCheckId;
}
if (null !== $model->order->loyaltyAccount->customFields) {
    $jsonData["order"]["loyaltyAccount"]["customFields"] = [];
foreach (array_keys($model->order->loyaltyAccount->customFields) as $index43) {
    $jsonData["order"]["loyaltyAccount"]["customFields"] = $model->order->loyaltyAccount->customFields;
}

}
if (null !== $model->order->loyaltyAccount->customer) {
    $jsonData["order"]["loyaltyAccount"]["customer"] = [];
if (null !== $model->order->loyaltyAccount->customer->site) {
    $jsonData["order"]["loyaltyAccount"]["customer"]["site"] = $model->order->loyaltyAccount->customer->site;
}
if (null !== $model->order->loyaltyAccount->customer->id) {
    $jsonData["order"]["loyaltyAccount"]["customer"]["id"] = $model->order->loyaltyAccount->customer->id;
}
if (null !== $model->order->loyaltyAccount->customer->externalId) {
    $jsonData["order"]["loyaltyAccount"]["customer"]["externalId"] = $model->order->loyaltyAccount->customer->externalId;
}
if (null !== $model->order->loyaltyAccount->customer->type) {
    $jsonData["order"]["loyaltyAccount"]["customer"]["type"] = $model->order->loyaltyAccount->customer->type;
}

if (0 === \count($jsonData["order"]["loyaltyAccount"]["customer"])) {
    $jsonData["order"]["loyaltyAccount"]["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["order"]["loyaltyAccount"])) {
    $jsonData["order"]["loyaltyAccount"] = $emptyObject;
}

}
if (null !== $model->order->loyaltyLevel) {
    $jsonData["order"]["loyaltyLevel"] = [];
if (null !== $model->order->loyaltyLevel->id) {
    $jsonData["order"]["loyaltyLevel"]["id"] = $model->order->loyaltyLevel->id;
}
if (null !== $model->order->loyaltyLevel->name) {
    $jsonData["order"]["loyaltyLevel"]["name"] = $model->order->loyaltyLevel->name;
}

if (0 === \count($jsonData["order"]["loyaltyLevel"])) {
    $jsonData["order"]["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->order->loyaltyEvent) {
    $jsonData["order"]["loyaltyEvent"] = [];
if (null !== $model->order->loyaltyEvent->id) {
    $jsonData["order"]["loyaltyEvent"]["id"] = $model->order->loyaltyEvent->id;
}

if (0 === \count($jsonData["order"]["loyaltyEvent"])) {
    $jsonData["order"]["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->order->customer) {
    $jsonData["order"]["customer"] = [];
if (null !== $model->order->customer->id) {
    $jsonData["order"]["customer"]["id"] = $model->order->customer->id;
}
if (null !== $model->order->customer->externalId) {
    $jsonData["order"]["customer"]["externalId"] = $model->order->customer->externalId;
}
if (null !== $model->order->customer->personalDiscount) {
    $jsonData["order"]["customer"]["personalDiscount"] = $model->order->customer->personalDiscount;
}

if (0 === \count($jsonData["order"]["customer"])) {
    $jsonData["order"]["customer"] = $emptyObject;
}

}
if (null !== $model->order->delivery) {
    $jsonData["order"]["delivery"] = [];
if (null !== $model->order->delivery->cost) {
    $jsonData["order"]["delivery"]["cost"] = $model->order->delivery->cost;
}

if (0 === \count($jsonData["order"]["delivery"])) {
    $jsonData["order"]["delivery"] = $emptyObject;
}

}
if (null !== $model->order->site) {
    $jsonData["order"]["site"] = $model->order->site;
}
if (null !== $model->order->items) {
    $jsonData["order"]["items"] = [];
foreach (array_keys($model->order->items) as $index18) {
    $jsonData["order"]["items"][$index18] = [];
if (null !== $model->order->items[$index18]->bonusesChargeTotal) {
    $jsonData["order"]["items"][$index18]["bonusesChargeTotal"] = $model->order->items[$index18]->bonusesChargeTotal;
}
if (null !== $model->order->items[$index18]->bonusesCreditTotal) {
    $jsonData["order"]["items"][$index18]["bonusesCreditTotal"] = $model->order->items[$index18]->bonusesCreditTotal;
}
if (null !== $model->order->items[$index18]->priceType) {
    $jsonData["order"]["items"][$index18]["priceType"] = [];
if (null !== $model->order->items[$index18]->priceType->code) {
    $jsonData["order"]["items"][$index18]["priceType"]["code"] = $model->order->items[$index18]->priceType->code;
}

if (0 === \count($jsonData["order"]["items"][$index18]["priceType"])) {
    $jsonData["order"]["items"][$index18]["priceType"] = $emptyObject;
}

}
if (null !== $model->order->items[$index18]->initialPrice) {
    $jsonData["order"]["items"][$index18]["initialPrice"] = $model->order->items[$index18]->initialPrice;
}
if (null !== $model->order->items[$index18]->discountTotal) {
    $jsonData["order"]["items"][$index18]["discountTotal"] = $model->order->items[$index18]->discountTotal;
}
if (null !== $model->order->items[$index18]->prices) {
    $jsonData["order"]["items"][$index18]["prices"] = [];
foreach (array_keys($model->order->items[$index18]->prices) as $index38) {
    $jsonData["order"]["items"][$index18]["prices"][$index38] = [];
if (null !== $model->order->items[$index18]->prices[$index38]->price) {
    $jsonData["order"]["items"][$index18]["prices"][$index38]["price"] = $model->order->items[$index18]->prices[$index38]->price;
}
if (null !== $model->order->items[$index18]->prices[$index38]->quantity) {
    $jsonData["order"]["items"][$index18]["prices"][$index38]["quantity"] = $model->order->items[$index18]->prices[$index38]->quantity;
}

if (0 === \count($jsonData["order"]["items"][$index18]["prices"][$index38])) {
    $jsonData["order"]["items"][$index18]["prices"][$index38] = $emptyObject;
}

}

}
if (null !== $model->order->items[$index18]->vatRate) {
    $jsonData["order"]["items"][$index18]["vatRate"] = $model->order->items[$index18]->vatRate;
}
if (null !== $model->order->items[$index18]->quantity) {
    $jsonData["order"]["items"][$index18]["quantity"] = $model->order->items[$index18]->quantity;
}

if (0 === \count($jsonData["order"]["items"][$index18])) {
    $jsonData["order"]["items"][$index18] = $emptyObject;
}

}

}

if (0 === \count($jsonData["order"])) {
    $jsonData["order"] = $emptyObject;
}

}
if (null !== $model->calculations) {
    $jsonData["calculations"] = [];
foreach (array_keys($model->calculations) as $index16) {
    $jsonData["calculations"][$index16] = [];
if (null !== $model->calculations[$index16]->privilegeType) {
    $jsonData["calculations"][$index16]["privilegeType"] = $model->calculations[$index16]->privilegeType;
}
if (null !== $model->calculations[$index16]->discount) {
    $jsonData["calculations"][$index16]["discount"] = $model->calculations[$index16]->discount;
}
if (null !== $model->calculations[$index16]->creditBonuses) {
    $jsonData["calculations"][$index16]["creditBonuses"] = $model->calculations[$index16]->creditBonuses;
}
if (null !== $model->calculations[$index16]->maxChargeBonuses) {
    $jsonData["calculations"][$index16]["maxChargeBonuses"] = $model->calculations[$index16]->maxChargeBonuses;
}
if (null !== $model->calculations[$index16]->maximum) {
    $jsonData["calculations"][$index16]["maximum"] = $model->calculations[$index16]->maximum;
}

if (0 === \count($jsonData["calculations"][$index16])) {
    $jsonData["calculations"][$index16] = $emptyObject;
}

}

}
if (null !== $model->loyalty) {
    $jsonData["loyalty"] = [];
if (null !== $model->loyalty->name) {
    $jsonData["loyalty"]["name"] = $model->loyalty->name;
}
if (null !== $model->loyalty->chargeRate) {
    $jsonData["loyalty"]["chargeRate"] = $model->loyalty->chargeRate;
}

if (0 === \count($jsonData["loyalty"])) {
    $jsonData["loyalty"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
