<?php

function deserialize_RetailCrm_Api_Model_Entity_Inventories_PriceUploadNotFoundResponse(array $jsonData): RetailCrm\Api\Model\Entity\Inventories\PriceUploadNotFoundResponse
{
    
$model = new RetailCrm\Api\Model\Entity\Inventories\PriceUploadNotFoundResponse();
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
