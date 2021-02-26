<?php

function deserialize_RetailCrm_Api_Model_Response_CustomFields_CustomFieldsEditResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomFields\CustomFieldsEditResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomFields\CustomFieldsEditResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
