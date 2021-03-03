<?php

function deserialize_RetailCrm_Api_Model_Response_Payments_PaymentCreateInvoiceResponse(array $jsonData): RetailCrm\Api\Model\Response\Payments\PaymentCreateInvoiceResponse
{
    
$model = new RetailCrm\Api\Model\Response\Payments\PaymentCreateInvoiceResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['result'])) {
    
$model->result = new RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceResponseResult();
if (isset($jsonData['result']['link'])) {
    $model->result->link = $jsonData['result']['link'];

}


}



    return $model;
}
