<?php

function serialize_RetailCrm_Api_Model_Entity_Inventories_PriceUploadInput(RetailCrm\Api\Model\Entity\Inventories\PriceUploadInput $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->xmlId) {
    $jsonData["xmlId"] = $model->xmlId;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->prices) {
    $jsonData["prices"] = [];
foreach (array_keys($model->prices) as $index10) {
    $jsonData["prices"][$index10] = [];
if (null !== $model->prices[$index10]->code) {
    $jsonData["prices"][$index10]["code"] = $model->prices[$index10]->code;
}
if (null !== $model->prices[$index10]->price) {
    $jsonData["prices"][$index10]["price"] = $model->prices[$index10]->price;
}
if (null !== $model->prices[$index10]->remove) {
    $jsonData["prices"][$index10]["remove"] = $model->prices[$index10]->remove;
}

if (0 === \count($jsonData["prices"][$index10])) {
    $jsonData["prices"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
