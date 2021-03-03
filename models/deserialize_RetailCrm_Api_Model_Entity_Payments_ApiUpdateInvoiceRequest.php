<?php

function deserialize_RetailCrm_Api_Model_Entity_Payments_ApiUpdateInvoiceRequest(array $jsonData): RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest
{
    
$model = new RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest();
if (isset($jsonData['invoiceUuid'])) {
    $model->invoiceUuid = $jsonData['invoiceUuid'];

}
if (isset($jsonData['paymentId'])) {
    $model->paymentId = $jsonData['paymentId'];

}
if (isset($jsonData['amount'])) {
    $model->amount = (float) $jsonData['amount'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['cancellationDetails'])) {
    $model->cancellationDetails = $jsonData['cancellationDetails'];

}
if (isset($jsonData['invoiceUrl'])) {
    $model->invoiceUrl = $jsonData['invoiceUrl'];

}
if (isset($jsonData['paidAt'])) {
    $model->paidAt = $jsonData['paidAt'];

}
if (isset($jsonData['expiredAt'])) {
    $model->expiredAt = $jsonData['expiredAt'];

}
if (isset($jsonData['refund'])) {
    
$model->refund = new RetailCrm\Api\Model\Entity\Payments\ModuleRefund();
if (isset($jsonData['refund']['status'])) {
    $model->refund->status = $jsonData['refund']['status'];

}
if (isset($jsonData['refund']['id'])) {
    $model->refund->id = $jsonData['refund']['id'];

}
if (isset($jsonData['refund']['comment'])) {
    $model->refund->comment = $jsonData['refund']['comment'];

}
if (isset($jsonData['refund']['amount'])) {
    $model->refund->amount = (float) $jsonData['refund']['amount'];

}


}
if (isset($jsonData['refundable'])) {
    $model->refundable = $jsonData['refundable'];

}
if (isset($jsonData['cancellable'])) {
    $model->cancellable = $jsonData['cancellable'];

}



    return $model;
}
