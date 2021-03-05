<?php

function serialize_RetailCrm_Api_Model_Response_Telephony_CallsUploadResponse(RetailCrm\Api\Model\Response\Telephony\CallsUploadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->processedCallsCount) {
    $jsonData["processedCallsCount"] = $model->processedCallsCount;
}
if (null !== $model->duplicateCalls) {
    $jsonData["duplicateCalls"] = [];
foreach (array_keys($model->duplicateCalls) as $index18) {
    $jsonData["duplicateCalls"] = $model->duplicateCalls;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
