<?php

function serialize_RetailCrm_Api_Model_Response_References_CountriesResponse(RetailCrm\Api\Model\Response\References\CountriesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->countriesIso) {
    $jsonData["countriesIso"] = $model->countriesIso;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
