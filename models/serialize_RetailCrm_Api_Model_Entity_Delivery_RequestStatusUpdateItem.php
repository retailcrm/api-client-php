<?php

function serialize_RetailCrm_Api_Model_Entity_Delivery_RequestStatusUpdateItem(RetailCrm\Api\Model\Entity\Delivery\RequestStatusUpdateItem $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->deliveryId) {
    $jsonData["deliveryId"] = $model->deliveryId;
}
if (null !== $model->history) {
    $jsonData["history"] = [];
foreach (array_keys($model->history) as $index11) {
    $jsonData["history"][$index11] = [];
if (null !== $model->history[$index11]->code) {
    $jsonData["history"][$index11]["code"] = $model->history[$index11]->code;
}
if (null !== $model->history[$index11]->updatedAt) {
    $jsonData["history"][$index11]["updatedAt"] = $model->history[$index11]->updatedAt->format('Y-m-d\TH:i:sP');;
}
if (null !== $model->history[$index11]->comment) {
    $jsonData["history"][$index11]["comment"] = $model->history[$index11]->comment;
}

if (0 === \count($jsonData["history"][$index11])) {
    $jsonData["history"][$index11] = $emptyObject;
}

}

}
if (null !== $model->trackNumber) {
    $jsonData["trackNumber"] = $model->trackNumber;
}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->extraData) {
    $jsonData["extraData"] = $model->extraData;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
