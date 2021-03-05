<?php

function deserialize_RetailCrm_Api_Model_Response_Telephony_CallEventResponse(array $jsonData): RetailCrm\Api\Model\Response\Telephony\CallEventResponse
{
    
$model = new RetailCrm\Api\Model\Response\Telephony\CallEventResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['notExistCodes'])) {
    $model->notExistCodes = [];
foreach (array_keys($jsonData['notExistCodes']) as $index26) {
    $model->notExistCodes[$index26] = $jsonData['notExistCodes'][$index26];

}

}
if (isset($jsonData['notExistUsers'])) {
    $model->notExistUsers = [];
foreach (array_keys($jsonData['notExistUsers']) as $index26) {
    $model->notExistUsers[$index26] = $jsonData['notExistUsers'][$index26];

}

}



    return $model;
}
