<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Delivery_TariffListResponse(RetailCrm\Api\Model\Callback\Response\Delivery\TariffListResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->result) {
    $jsonData["result"] = [];
foreach (array_keys($model->result) as $index10) {
    $jsonData["result"][$index10] = [];
if (null !== $model->result[$index10]->code) {
    $jsonData["result"][$index10]["code"] = $model->result[$index10]->code;
}
if (null !== $model->result[$index10]->name) {
    $jsonData["result"][$index10]["name"] = $model->result[$index10]->name;
}
if (null !== $model->result[$index10]->description) {
    $jsonData["result"][$index10]["description"] = $model->result[$index10]->description;
}
if (null !== $model->result[$index10]->type) {
    $jsonData["result"][$index10]["type"] = $model->result[$index10]->type;
}

if (0 === \count($jsonData["result"][$index10])) {
    $jsonData["result"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
