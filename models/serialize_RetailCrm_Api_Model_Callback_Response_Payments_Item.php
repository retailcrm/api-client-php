<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Payments_Item(RetailCrm\Api\Model\Callback\Response\Payments\Item $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->measurementUnit) {
    $jsonData["measurementUnit"] = $model->measurementUnit;
}
if (null !== $model->vat) {
    $jsonData["vat"] = $model->vat;
}
if (null !== $model->paymentMethod) {
    $jsonData["paymentMethod"] = $model->paymentMethod;
}
if (null !== $model->paymentObject) {
    $jsonData["paymentObject"] = $model->paymentObject;
}
if (null !== $model->productCode) {
    $jsonData["productCode"] = $model->productCode;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
