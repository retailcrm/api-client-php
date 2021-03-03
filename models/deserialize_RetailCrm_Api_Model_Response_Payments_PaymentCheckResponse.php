<?php

function deserialize_RetailCrm_Api_Model_Response_Payments_PaymentCheckResponse(array $jsonData): RetailCrm\Api\Model\Response\Payments\PaymentCheckResponse
{
    
$model = new RetailCrm\Api\Model\Response\Payments\PaymentCheckResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['result'])) {
    
$model->result = new RetailCrm\Api\Model\Entity\Payments\ApiCheckResponseResult();
if (isset($jsonData['result']['success'])) {
    $model->result->success = $jsonData['result']['success'];

}
if (isset($jsonData['result']['errorMsg'])) {
    $model->result->errorMsg = $jsonData['result']['errorMsg'];

}


}



    return $model;
}
