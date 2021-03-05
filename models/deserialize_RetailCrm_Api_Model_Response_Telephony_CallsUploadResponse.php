<?php

function deserialize_RetailCrm_Api_Model_Response_Telephony_CallsUploadResponse(array $jsonData): RetailCrm\Api\Model\Response\Telephony\CallsUploadResponse
{
    
$model = new RetailCrm\Api\Model\Response\Telephony\CallsUploadResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['processedCallsCount'])) {
    $model->processedCallsCount = $jsonData['processedCallsCount'];

}
if (isset($jsonData['duplicateCalls'])) {
    $model->duplicateCalls = [];
foreach (array_keys($jsonData['duplicateCalls']) as $index27) {
    $model->duplicateCalls[$index27] = $jsonData['duplicateCalls'][$index27];

}

}



    return $model;
}
