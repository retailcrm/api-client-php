<?php

function deserialize_RetailCrm_Api_Model_Entity_Store_PriceUploadNotFoundResponse(array $jsonData): RetailCrm\Api\Model\Entity\Store\PriceUploadNotFoundResponse
{
    
$model = new RetailCrm\Api\Model\Entity\Store\PriceUploadNotFoundResponse();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['xmlId'])) {
    $model->xmlId = $jsonData['xmlId'];

}



    return $model;
}
