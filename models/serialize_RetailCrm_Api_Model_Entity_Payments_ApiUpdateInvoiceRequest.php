<?php

function serialize_RetailCrm_Api_Model_Entity_Payments_ApiUpdateInvoiceRequest(RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->invoiceUuid) {
    $jsonData["invoiceUuid"] = $model->invoiceUuid;
}
if (null !== $model->paymentId) {
    $jsonData["paymentId"] = $model->paymentId;
}
if (null !== $model->amount) {
    $jsonData["amount"] = $model->amount;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->cancellationDetails) {
    $jsonData["cancellationDetails"] = $model->cancellationDetails;
}
if (null !== $model->invoiceUrl) {
    $jsonData["invoiceUrl"] = $model->invoiceUrl;
}
if (null !== $model->paidAt) {
    $jsonData["paidAt"] = $model->paidAt;
}
if (null !== $model->expiredAt) {
    $jsonData["expiredAt"] = $model->expiredAt;
}
if (null !== $model->refund) {
    $jsonData["refund"] = [];
if (null !== $model->refund->status) {
    $jsonData["refund"]["status"] = $model->refund->status;
}
if (null !== $model->refund->id) {
    $jsonData["refund"]["id"] = $model->refund->id;
}
if (null !== $model->refund->comment) {
    $jsonData["refund"]["comment"] = $model->refund->comment;
}
if (null !== $model->refund->amount) {
    $jsonData["refund"]["amount"] = $model->refund->amount;
}

if (0 === \count($jsonData["refund"])) {
    $jsonData["refund"] = $emptyObject;
}

}
if (null !== $model->refundable) {
    $jsonData["refundable"] = $model->refundable;
}
if (null !== $model->cancellable) {
    $jsonData["cancellable"] = $model->cancellable;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
