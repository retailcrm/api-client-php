<?php

function serialize_RetailCrm_Api_Model_Entity_Order_Delivery_Package(RetailCrm\Api\Model\Entity\Order\Delivery\Package $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->packageId) {
    $jsonData["packageId"] = $model->packageId;
}
if (null !== $model->weight) {
    $jsonData["weight"] = $model->weight;
}
if (null !== $model->length) {
    $jsonData["length"] = $model->length;
}
if (null !== $model->width) {
    $jsonData["width"] = $model->width;
}
if (null !== $model->height) {
    $jsonData["height"] = $model->height;
}
if (null !== $model->items) {
    $jsonData["items"] = [];
foreach (array_keys($model->items) as $index9) {
    $jsonData["items"][$index9] = [];
if (null !== $model->items[$index9]->orderProduct) {
    $jsonData["items"][$index9]["orderProduct"] = [];
if (null !== $model->items[$index9]->orderProduct->id) {
    $jsonData["items"][$index9]["orderProduct"]["id"] = $model->items[$index9]->orderProduct->id;
}
if (null !== $model->items[$index9]->orderProduct->externalId) {
    $jsonData["items"][$index9]["orderProduct"]["externalId"] = $model->items[$index9]->orderProduct->externalId;
}
if (null !== $model->items[$index9]->orderProduct->externalIds) {
    $jsonData["items"][$index9]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->items[$index9]->orderProduct->externalIds) as $index49) {
    $jsonData["items"][$index9]["orderProduct"]["externalIds"][$index49] = [];
if (null !== $model->items[$index9]->orderProduct->externalIds[$index49]->code) {
    $jsonData["items"][$index9]["orderProduct"]["externalIds"][$index49]["code"] = $model->items[$index9]->orderProduct->externalIds[$index49]->code;
}
if (null !== $model->items[$index9]->orderProduct->externalIds[$index49]->value) {
    $jsonData["items"][$index9]["orderProduct"]["externalIds"][$index49]["value"] = $model->items[$index9]->orderProduct->externalIds[$index49]->value;
}

if (0 === \count($jsonData["items"][$index9]["orderProduct"]["externalIds"][$index49])) {
    $jsonData["items"][$index9]["orderProduct"]["externalIds"][$index49] = $emptyObject;
}

}

}

if (0 === \count($jsonData["items"][$index9]["orderProduct"])) {
    $jsonData["items"][$index9]["orderProduct"] = $emptyObject;
}

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
