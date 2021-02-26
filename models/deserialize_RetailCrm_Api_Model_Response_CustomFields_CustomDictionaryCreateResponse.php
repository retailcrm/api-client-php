<?php

function deserialize_RetailCrm_Api_Model_Response_CustomFields_CustomDictionaryCreateResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryCreateResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryCreateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
