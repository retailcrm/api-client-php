<?php

function serialize_RetailCrm_Api_Model_Entity_References_GeoHierarchyRow(RetailCrm\Api\Model\Entity\References\GeoHierarchyRow $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->country) {
    $jsonData["country"] = $model->country;
}
if (null !== $model->regionId) {
    $jsonData["regionId"] = $model->regionId;
}
if (null !== $model->region) {
    $jsonData["region"] = $model->region;
}
if (null !== $model->cityId) {
    $jsonData["cityId"] = $model->cityId;
}
if (null !== $model->city) {
    $jsonData["city"] = $model->city;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
