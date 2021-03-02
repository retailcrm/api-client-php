<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_SerializedOrderLink(RetailCrm\Api\Model\Entity\Orders\SerializedOrderLink $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->orders) {
    $jsonData["orders"] = [];
foreach (array_keys($model->orders) as $index10) {
    $jsonData["orders"][$index10] = [];
if (null !== $model->orders[$index10]->id) {
    $jsonData["orders"][$index10]["id"] = $model->orders[$index10]->id;
}
if (null !== $model->orders[$index10]->externalId) {
    $jsonData["orders"][$index10]["externalId"] = $model->orders[$index10]->externalId;
}
if (null !== $model->orders[$index10]->number) {
    $jsonData["orders"][$index10]["number"] = $model->orders[$index10]->number;
}

if (0 === \count($jsonData["orders"][$index10])) {
    $jsonData["orders"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
