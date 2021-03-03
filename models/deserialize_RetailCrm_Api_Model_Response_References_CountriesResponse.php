<?php

function deserialize_RetailCrm_Api_Model_Response_References_CountriesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\CountriesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\CountriesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['countriesIso'])) {
    $model->countriesIso = $jsonData['countriesIso'];

}



    return $model;
}
