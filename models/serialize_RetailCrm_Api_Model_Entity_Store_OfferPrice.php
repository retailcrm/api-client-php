<?php

function serialize_RetailCrm_Api_Model_Entity_Store_OfferPrice(RetailCrm\Api\Model\Entity\Store\OfferPrice $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->priceType) {
    $jsonData["priceType"] = $model->priceType;
}
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}
if (null !== $model->ordering) {
    $jsonData["ordering"] = $model->ordering;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
