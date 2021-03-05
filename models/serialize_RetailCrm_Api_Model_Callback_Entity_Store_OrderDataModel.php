<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Store_OrderDataModel(RetailCrm\Api\Model\Callback\Entity\Store\OrderDataModel $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
