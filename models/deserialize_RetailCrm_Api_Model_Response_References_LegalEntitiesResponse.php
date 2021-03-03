<?php

function deserialize_RetailCrm_Api_Model_Response_References_LegalEntitiesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\LegalEntitiesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\LegalEntitiesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['legalEntities'])) {
    $model->legalEntities = [];
foreach (array_keys($jsonData['legalEntities']) as $index26) {
    
$model->legalEntities[$index26] = new RetailCrm\Api\Model\Entity\References\LegalEntity();
if (isset($jsonData['legalEntities'][$index26]['contragentType'])) {
    $model->legalEntities[$index26]->contragentType = $jsonData['legalEntities'][$index26]['contragentType'];

}
if (isset($jsonData['legalEntities'][$index26]['legalName'])) {
    $model->legalEntities[$index26]->legalName = $jsonData['legalEntities'][$index26]['legalName'];

}
if (isset($jsonData['legalEntities'][$index26]['legalAddress'])) {
    $model->legalEntities[$index26]->legalAddress = $jsonData['legalEntities'][$index26]['legalAddress'];

}
if (isset($jsonData['legalEntities'][$index26]['INN'])) {
    $model->legalEntities[$index26]->INN = $jsonData['legalEntities'][$index26]['INN'];

}
if (isset($jsonData['legalEntities'][$index26]['OKPO'])) {
    $model->legalEntities[$index26]->OKPO = $jsonData['legalEntities'][$index26]['OKPO'];

}
if (isset($jsonData['legalEntities'][$index26]['KPP'])) {
    $model->legalEntities[$index26]->KPP = $jsonData['legalEntities'][$index26]['KPP'];

}
if (isset($jsonData['legalEntities'][$index26]['OGRN'])) {
    $model->legalEntities[$index26]->OGRN = $jsonData['legalEntities'][$index26]['OGRN'];

}
if (isset($jsonData['legalEntities'][$index26]['OGRNIP'])) {
    $model->legalEntities[$index26]->OGRNIP = $jsonData['legalEntities'][$index26]['OGRNIP'];

}
if (isset($jsonData['legalEntities'][$index26]['certificateNumber'])) {
    $model->legalEntities[$index26]->certificateNumber = $jsonData['legalEntities'][$index26]['certificateNumber'];

}
if (isset($jsonData['legalEntities'][$index26]['certificateDate'])) {
    $model->legalEntities[$index26]->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['legalEntities'][$index26]['certificateDate']);

}
if (isset($jsonData['legalEntities'][$index26]['BIK'])) {
    $model->legalEntities[$index26]->BIK = $jsonData['legalEntities'][$index26]['BIK'];

}
if (isset($jsonData['legalEntities'][$index26]['bank'])) {
    $model->legalEntities[$index26]->bank = $jsonData['legalEntities'][$index26]['bank'];

}
if (isset($jsonData['legalEntities'][$index26]['bankAddress'])) {
    $model->legalEntities[$index26]->bankAddress = $jsonData['legalEntities'][$index26]['bankAddress'];

}
if (isset($jsonData['legalEntities'][$index26]['corrAccount'])) {
    $model->legalEntities[$index26]->corrAccount = $jsonData['legalEntities'][$index26]['corrAccount'];

}
if (isset($jsonData['legalEntities'][$index26]['bankAccount'])) {
    $model->legalEntities[$index26]->bankAccount = $jsonData['legalEntities'][$index26]['bankAccount'];

}
if (isset($jsonData['legalEntities'][$index26]['code'])) {
    $model->legalEntities[$index26]->code = $jsonData['legalEntities'][$index26]['code'];

}
if (isset($jsonData['legalEntities'][$index26]['countryIso'])) {
    $model->legalEntities[$index26]->countryIso = $jsonData['legalEntities'][$index26]['countryIso'];

}
if (isset($jsonData['legalEntities'][$index26]['vatRate'])) {
    $model->legalEntities[$index26]->vatRate = $jsonData['legalEntities'][$index26]['vatRate'];

}


}

}



    return $model;
}
