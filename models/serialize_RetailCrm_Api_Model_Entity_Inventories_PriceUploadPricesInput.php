<?php

function serialize_RetailCrm_Api_Model_Entity_Inventories_PriceUploadPricesInput(RetailCrm\Api\Model\Entity\Inventories\PriceUploadPricesInput $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}
if (null !== $model->remove) {
    $jsonData["remove"] = $model->remove;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
