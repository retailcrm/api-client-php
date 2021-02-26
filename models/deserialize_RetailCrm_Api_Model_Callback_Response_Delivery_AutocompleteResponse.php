<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Delivery_AutocompleteResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Delivery\AutocompleteResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Delivery\AutocompleteResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['value'])) {
    $model->value = $jsonData['value'];

}
if (isset($jsonData['label'])) {
    $model->label = $jsonData['label'];

}
if (isset($jsonData['result'])) {
    
$model->result = new RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseAutocompleteItem();
if (isset($jsonData['result']['value'])) {
    $model->result->value = $jsonData['result']['value'];

}
if (isset($jsonData['result']['label'])) {
    $model->result->label = $jsonData['result']['label'];

}
if (isset($jsonData['result']['description'])) {
    $model->result->description = $jsonData['result']['description'];

}


}



    return $model;
}
