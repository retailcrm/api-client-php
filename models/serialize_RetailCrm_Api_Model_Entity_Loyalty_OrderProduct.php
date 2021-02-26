<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_OrderProduct(RetailCrm\Api\Model\Entity\Loyalty\OrderProduct $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->bonusesChargeTotal) {
    $jsonData["bonusesChargeTotal"] = $model->bonusesChargeTotal;
}
if (null !== $model->bonusesCreditTotal) {
    $jsonData["bonusesCreditTotal"] = $model->bonusesCreditTotal;
}
if (null !== $model->priceType) {
    $jsonData["priceType"] = [];
if (null !== $model->priceType->code) {
    $jsonData["priceType"]["code"] = $model->priceType->code;
}

if (0 === \count($jsonData["priceType"])) {
    $jsonData["priceType"] = $emptyObject;
}

}
if (null !== $model->initialPrice) {
    $jsonData["initialPrice"] = $model->initialPrice;
}
if (null !== $model->discountTotal) {
    $jsonData["discountTotal"] = $model->discountTotal;
}
if (null !== $model->prices) {
    $jsonData["prices"] = [];
foreach (array_keys($model->prices) as $index10) {
    $jsonData["prices"][$index10] = [];
if (null !== $model->prices[$index10]->price) {
    $jsonData["prices"][$index10]["price"] = $model->prices[$index10]->price;
}
if (null !== $model->prices[$index10]->quantity) {
    $jsonData["prices"][$index10]["quantity"] = $model->prices[$index10]->quantity;
}

if (0 === \count($jsonData["prices"][$index10])) {
    $jsonData["prices"][$index10] = $emptyObject;
}

}

}
if (null !== $model->vatRate) {
    $jsonData["vatRate"] = $model->vatRate;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
