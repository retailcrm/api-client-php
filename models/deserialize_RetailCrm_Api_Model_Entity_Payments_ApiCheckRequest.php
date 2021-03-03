<?php

function deserialize_RetailCrm_Api_Model_Entity_Payments_ApiCheckRequest(array $jsonData): RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest
{
    
$model = new RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest();
if (isset($jsonData['invoiceUuid'])) {
    $model->invoiceUuid = $jsonData['invoiceUuid'];

}
if (isset($jsonData['amount'])) {
    $model->amount = (float) $jsonData['amount'];

}
if (isset($jsonData['currency'])) {
    $model->currency = $jsonData['currency'];

}



    return $model;
}
