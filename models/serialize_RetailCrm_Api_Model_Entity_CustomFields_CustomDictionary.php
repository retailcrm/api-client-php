<?php

function serialize_RetailCrm_Api_Model_Entity_CustomFields_CustomDictionary(RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->elements) {
    $jsonData["elements"] = [];
foreach (array_keys($model->elements) as $index12) {
    $jsonData["elements"][$index12] = [];
if (null !== $model->elements[$index12]->name) {
    $jsonData["elements"][$index12]["name"] = $model->elements[$index12]->name;
}
if (null !== $model->elements[$index12]->code) {
    $jsonData["elements"][$index12]["code"] = $model->elements[$index12]->code;
}
if (null !== $model->elements[$index12]->ordering) {
    $jsonData["elements"][$index12]["ordering"] = $model->elements[$index12]->ordering;
}

if (0 === \count($jsonData["elements"][$index12])) {
    $jsonData["elements"][$index12] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
