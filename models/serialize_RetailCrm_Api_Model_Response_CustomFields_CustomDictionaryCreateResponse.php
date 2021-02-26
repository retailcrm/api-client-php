<?php

function serialize_RetailCrm_Api_Model_Response_CustomFields_CustomDictionaryCreateResponse(RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryCreateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
