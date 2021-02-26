<?php

function deserialize_RetailCrm_Api_Model_ResponseData(array $jsonData): RetailCrm\Api\Model\ResponseData
{
    
$model = new RetailCrm\Api\Model\ResponseData();
if (isset($jsonData['uri'])) {
    $model->uri = $jsonData['uri'];

}
if (isset($jsonData['method'])) {
    $model->method = $jsonData['method'];

}
if (isset($jsonData['response'])) {
    $model->response = $jsonData['response'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['response_model'])) {
    $model->responseModel = $jsonData['response_model'];

}



    return $model;
}
