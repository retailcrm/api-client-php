<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Store_Action(RetailCrm\Api\Model\Entity\Integration\Store\Action $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->url) {
    $jsonData["url"] = $model->url;
}
if (null !== $model->callPoints) {
    $jsonData["callPoints"] = $model->callPoints;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
