<?php

function serialize_RetailCrm_Api_Model_Response_References_DeliveryServicesResponse(RetailCrm\Api\Model\Response\References\DeliveryServicesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->deliveryServices) {
    $jsonData["deliveryServices"] = [];
foreach (array_keys($model->deliveryServices) as $index20) {
    $jsonData["deliveryServices"][$index20] = [];
if (null !== $model->deliveryServices[$index20]->name) {
    $jsonData["deliveryServices"][$index20]["name"] = $model->deliveryServices[$index20]->name;
}
if (null !== $model->deliveryServices[$index20]->code) {
    $jsonData["deliveryServices"][$index20]["code"] = $model->deliveryServices[$index20]->code;
}
if (null !== $model->deliveryServices[$index20]->active) {
    $jsonData["deliveryServices"][$index20]["active"] = $model->deliveryServices[$index20]->active;
}

if (0 === \count($jsonData["deliveryServices"][$index20])) {
    $jsonData["deliveryServices"][$index20] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
