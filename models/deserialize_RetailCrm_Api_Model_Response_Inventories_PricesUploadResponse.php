<?php

function deserialize_RetailCrm_Api_Model_Response_Inventories_PricesUploadResponse(array $jsonData): RetailCrm\Api\Model\Response\Inventories\PricesUploadResponse
{
    
$model = new RetailCrm\Api\Model\Response\Inventories\PricesUploadResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['processedOffersCount'])) {
    $model->processedOffersCount = $jsonData['processedOffersCount'];

}
if (isset($jsonData['notFoundOffers'])) {
    $model->notFoundOffers = [];
foreach (array_keys($jsonData['notFoundOffers']) as $index27) {
    
$model->notFoundOffers[$index27] = new RetailCrm\Api\Model\Entity\Inventories\PriceUploadNotFoundResponse();
if (isset($jsonData['notFoundOffers'][$index27]['id'])) {
    $model->notFoundOffers[$index27]->id = $jsonData['notFoundOffers'][$index27]['id'];

}
if (isset($jsonData['notFoundOffers'][$index27]['externalId'])) {
    $model->notFoundOffers[$index27]->externalId = $jsonData['notFoundOffers'][$index27]['externalId'];

}
if (isset($jsonData['notFoundOffers'][$index27]['xmlId'])) {
    $model->notFoundOffers[$index27]->xmlId = $jsonData['notFoundOffers'][$index27]['xmlId'];

}


}

}



    return $model;
}
