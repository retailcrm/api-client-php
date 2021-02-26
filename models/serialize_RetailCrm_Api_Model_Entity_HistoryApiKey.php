<?php

function serialize_RetailCrm_Api_Model_Entity_HistoryApiKey(RetailCrm\Api\Model\Entity\HistoryApiKey $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->current) {
    $jsonData["current"] = $model->current;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
