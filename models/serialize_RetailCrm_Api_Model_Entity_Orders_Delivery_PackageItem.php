<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_Delivery_PackageItem(RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItem $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->orderProduct) {
    $jsonData["orderProduct"] = [];
if (null !== $model->orderProduct->id) {
    $jsonData["orderProduct"]["id"] = $model->orderProduct->id;
}
if (null !== $model->orderProduct->externalId) {
    $jsonData["orderProduct"]["externalId"] = $model->orderProduct->externalId;
}
if (null !== $model->orderProduct->externalIds) {
    $jsonData["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->orderProduct->externalIds) as $index31) {
    $jsonData["orderProduct"]["externalIds"][$index31] = [];
if (null !== $model->orderProduct->externalIds[$index31]->code) {
    $jsonData["orderProduct"]["externalIds"][$index31]["code"] = $model->orderProduct->externalIds[$index31]->code;
}
if (null !== $model->orderProduct->externalIds[$index31]->value) {
    $jsonData["orderProduct"]["externalIds"][$index31]["value"] = $model->orderProduct->externalIds[$index31]->value;
}

if (0 === \count($jsonData["orderProduct"]["externalIds"][$index31])) {
    $jsonData["orderProduct"]["externalIds"][$index31] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orderProduct"])) {
    $jsonData["orderProduct"] = $emptyObject;
}

}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
