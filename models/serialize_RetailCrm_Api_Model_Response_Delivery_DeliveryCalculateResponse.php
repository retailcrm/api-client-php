<?php

function serialize_RetailCrm_Api_Model_Response_Delivery_DeliveryCalculateResponse(RetailCrm\Api\Model\Response\Delivery\DeliveryCalculateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->calculations) {
    $jsonData["calculations"] = [];
foreach (array_keys($model->calculations) as $index16) {
    $jsonData["calculations"][$index16] = [];
if (null !== $model->calculations[$index16]->code) {
    $jsonData["calculations"][$index16]["code"] = $model->calculations[$index16]->code;
}
if (null !== $model->calculations[$index16]->available) {
    $jsonData["calculations"][$index16]["available"] = $model->calculations[$index16]->available;
}
if (null !== $model->calculations[$index16]->vatRate) {
    $jsonData["calculations"][$index16]["vatRate"] = $model->calculations[$index16]->vatRate;
}
if (null !== $model->calculations[$index16]->cost) {
    $jsonData["calculations"][$index16]["cost"] = $model->calculations[$index16]->cost;
}

if (0 === \count($jsonData["calculations"][$index16])) {
    $jsonData["calculations"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
