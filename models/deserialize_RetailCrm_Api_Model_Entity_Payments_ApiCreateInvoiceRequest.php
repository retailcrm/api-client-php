<?php

function deserialize_RetailCrm_Api_Model_Entity_Payments_ApiCreateInvoiceRequest(array $jsonData): RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest
{
    
$model = new RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest();
if (isset($jsonData['paymentId'])) {
    $model->paymentId = $jsonData['paymentId'];

}
if (isset($jsonData['returnUrl'])) {
    $model->returnUrl = $jsonData['returnUrl'];

}



    return $model;
}
