<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_OrderContragent(array $jsonData): RetailCrm\Api\Model\Entity\Orders\OrderContragent
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\OrderContragent();
if (isset($jsonData['contragentType'])) {
    $model->contragentType = $jsonData['contragentType'];

}
if (isset($jsonData['legalName'])) {
    $model->legalName = $jsonData['legalName'];

}
if (isset($jsonData['legalAddress'])) {
    $model->legalAddress = $jsonData['legalAddress'];

}
if (isset($jsonData['INN'])) {
    $model->INN = $jsonData['INN'];

}
if (isset($jsonData['OKPO'])) {
    $model->OKPO = $jsonData['OKPO'];

}
if (isset($jsonData['KPP'])) {
    $model->KPP = $jsonData['KPP'];

}
if (isset($jsonData['OGRN'])) {
    $model->OGRN = $jsonData['OGRN'];

}
if (isset($jsonData['OGRNIP'])) {
    $model->OGRNIP = $jsonData['OGRNIP'];

}
if (isset($jsonData['certificateNumber'])) {
    $model->certificateNumber = $jsonData['certificateNumber'];

}
if (isset($jsonData['certificateDate'])) {
    $model->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['certificateDate']);

}
if (isset($jsonData['BIK'])) {
    $model->BIK = $jsonData['BIK'];

}
if (isset($jsonData['bank'])) {
    $model->bank = $jsonData['bank'];

}
if (isset($jsonData['bankAddress'])) {
    $model->bankAddress = $jsonData['bankAddress'];

}
if (isset($jsonData['corrAccount'])) {
    $model->corrAccount = $jsonData['corrAccount'];

}
if (isset($jsonData['bankAccount'])) {
    $model->bankAccount = $jsonData['bankAccount'];

}



    return $model;
}
