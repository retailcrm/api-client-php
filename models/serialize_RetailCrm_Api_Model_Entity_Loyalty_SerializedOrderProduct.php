<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedOrderProduct(RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProduct $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->initialPrice) {
    $jsonData["initialPrice"] = $model->initialPrice;
}
if (null !== $model->discountManualAmount) {
    $jsonData["discountManualAmount"] = $model->discountManualAmount;
}
if (null !== $model->discountManualPercent) {
    $jsonData["discountManualPercent"] = $model->discountManualPercent;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->offer) {
    $jsonData["offer"] = [];
if (null !== $model->offer->id) {
    $jsonData["offer"]["id"] = $model->offer->id;
}
if (null !== $model->offer->externalId) {
    $jsonData["offer"]["externalId"] = $model->offer->externalId;
}
if (null !== $model->offer->xmlId) {
    $jsonData["offer"]["xmlId"] = $model->offer->xmlId;
}

if (0 === \count($jsonData["offer"])) {
    $jsonData["offer"] = $emptyObject;
}

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

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
