<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Payment_PaymentConfiguration(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration();
if (isset($jsonData['actions'])) {
    
$model->actions = new RetailCrm\Api\Model\Entity\Integration\Payment\Actions();
if (isset($jsonData['actions']['create'])) {
    $model->actions->create = $jsonData['actions']['create'];

}
if (isset($jsonData['actions']['approve'])) {
    $model->actions->approve = $jsonData['actions']['approve'];

}
if (isset($jsonData['actions']['cancel'])) {
    $model->actions->cancel = $jsonData['actions']['cancel'];

}
if (isset($jsonData['actions']['refund'])) {
    $model->actions->refund = $jsonData['actions']['refund'];

}


}
if (isset($jsonData['currencies'])) {
    $model->currencies = $jsonData['currencies'];

}
if (isset($jsonData['invoiceTypes'])) {
    $model->invoiceTypes = $jsonData['invoiceTypes'];

}
if (isset($jsonData['shops'])) {
    $model->shops = [];
foreach (array_keys($jsonData['shops']) as $index18) {
    
$model->shops[$index18] = new RetailCrm\Api\Model\Entity\Integration\Payment\Shop();
if (isset($jsonData['shops'][$index18]['code'])) {
    $model->shops[$index18]->code = $jsonData['shops'][$index18]['code'];

}
if (isset($jsonData['shops'][$index18]['name'])) {
    $model->shops[$index18]->name = $jsonData['shops'][$index18]['name'];

}
if (isset($jsonData['shops'][$index18]['active'])) {
    $model->shops[$index18]->active = $jsonData['shops'][$index18]['active'];

}


}

}



    return $model;
}
