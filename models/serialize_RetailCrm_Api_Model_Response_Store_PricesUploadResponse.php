<?php

function serialize_RetailCrm_Api_Model_Response_Store_PricesUploadResponse(RetailCrm\Api\Model\Response\Store\PricesUploadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->processedOffersCount) {
    $jsonData["processedOffersCount"] = $model->processedOffersCount;
}
if (null !== $model->notFoundOffers) {
    $jsonData["notFoundOffers"] = [];
foreach (array_keys($model->notFoundOffers) as $index18) {
    $jsonData["notFoundOffers"][$index18] = [];
if (null !== $model->notFoundOffers[$index18]->id) {
    $jsonData["notFoundOffers"][$index18]["id"] = $model->notFoundOffers[$index18]->id;
}
if (null !== $model->notFoundOffers[$index18]->externalId) {
    $jsonData["notFoundOffers"][$index18]["externalId"] = $model->notFoundOffers[$index18]->externalId;
}
if (null !== $model->notFoundOffers[$index18]->xmlId) {
    $jsonData["notFoundOffers"][$index18]["xmlId"] = $model->notFoundOffers[$index18]->xmlId;
}

if (0 === \count($jsonData["notFoundOffers"][$index18])) {
    $jsonData["notFoundOffers"][$index18] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
