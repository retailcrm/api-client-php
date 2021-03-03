<?php

function deserialize_RetailCrm_Api_Model_Response_References_SitesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\SitesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\SitesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['sites'])) {
    $model->sites = [];
foreach (array_keys($jsonData['sites']) as $index18) {
    
$model->sites[$index18] = new RetailCrm\Api\Model\Entity\References\Site();
if (isset($jsonData['sites'][$index18]['name'])) {
    $model->sites[$index18]->name = $jsonData['sites'][$index18]['name'];

}
if (isset($jsonData['sites'][$index18]['url'])) {
    $model->sites[$index18]->url = $jsonData['sites'][$index18]['url'];

}
if (isset($jsonData['sites'][$index18]['code'])) {
    $model->sites[$index18]->code = $jsonData['sites'][$index18]['code'];

}
if (isset($jsonData['sites'][$index18]['description'])) {
    $model->sites[$index18]->description = $jsonData['sites'][$index18]['description'];

}
if (isset($jsonData['sites'][$index18]['phones'])) {
    $model->sites[$index18]->phones = $jsonData['sites'][$index18]['phones'];

}
if (isset($jsonData['sites'][$index18]['address'])) {
    $model->sites[$index18]->address = $jsonData['sites'][$index18]['address'];

}
if (isset($jsonData['sites'][$index18]['zip'])) {
    $model->sites[$index18]->zip = $jsonData['sites'][$index18]['zip'];

}
if (isset($jsonData['sites'][$index18]['defaultForCrm'])) {
    $model->sites[$index18]->defaultForCrm = $jsonData['sites'][$index18]['defaultForCrm'];

}
if (isset($jsonData['sites'][$index18]['ymlUrl'])) {
    $model->sites[$index18]->ymlUrl = $jsonData['sites'][$index18]['ymlUrl'];

}
if (isset($jsonData['sites'][$index18]['loadFromYml'])) {
    $model->sites[$index18]->loadFromYml = $jsonData['sites'][$index18]['loadFromYml'];

}
if (isset($jsonData['sites'][$index18]['catalogUpdatedAt'])) {
    $model->sites[$index18]->catalogUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['sites'][$index18]['catalogUpdatedAt']);

}
if (isset($jsonData['sites'][$index18]['catalogLoadingAt'])) {
    $model->sites[$index18]->catalogLoadingAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['sites'][$index18]['catalogLoadingAt']);

}
if (isset($jsonData['sites'][$index18]['contragent'])) {
    
$model->sites[$index18]->contragent = new RetailCrm\Api\Model\Entity\References\LegalEntity();
if (isset($jsonData['sites'][$index18]['contragent']['contragentType'])) {
    $model->sites[$index18]->contragent->contragentType = $jsonData['sites'][$index18]['contragent']['contragentType'];

}
if (isset($jsonData['sites'][$index18]['contragent']['legalName'])) {
    $model->sites[$index18]->contragent->legalName = $jsonData['sites'][$index18]['contragent']['legalName'];

}
if (isset($jsonData['sites'][$index18]['contragent']['legalAddress'])) {
    $model->sites[$index18]->contragent->legalAddress = $jsonData['sites'][$index18]['contragent']['legalAddress'];

}
if (isset($jsonData['sites'][$index18]['contragent']['INN'])) {
    $model->sites[$index18]->contragent->INN = $jsonData['sites'][$index18]['contragent']['INN'];

}
if (isset($jsonData['sites'][$index18]['contragent']['OKPO'])) {
    $model->sites[$index18]->contragent->OKPO = $jsonData['sites'][$index18]['contragent']['OKPO'];

}
if (isset($jsonData['sites'][$index18]['contragent']['KPP'])) {
    $model->sites[$index18]->contragent->KPP = $jsonData['sites'][$index18]['contragent']['KPP'];

}
if (isset($jsonData['sites'][$index18]['contragent']['OGRN'])) {
    $model->sites[$index18]->contragent->OGRN = $jsonData['sites'][$index18]['contragent']['OGRN'];

}
if (isset($jsonData['sites'][$index18]['contragent']['OGRNIP'])) {
    $model->sites[$index18]->contragent->OGRNIP = $jsonData['sites'][$index18]['contragent']['OGRNIP'];

}
if (isset($jsonData['sites'][$index18]['contragent']['certificateNumber'])) {
    $model->sites[$index18]->contragent->certificateNumber = $jsonData['sites'][$index18]['contragent']['certificateNumber'];

}
if (isset($jsonData['sites'][$index18]['contragent']['certificateDate'])) {
    $model->sites[$index18]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['sites'][$index18]['contragent']['certificateDate']);

}
if (isset($jsonData['sites'][$index18]['contragent']['BIK'])) {
    $model->sites[$index18]->contragent->BIK = $jsonData['sites'][$index18]['contragent']['BIK'];

}
if (isset($jsonData['sites'][$index18]['contragent']['bank'])) {
    $model->sites[$index18]->contragent->bank = $jsonData['sites'][$index18]['contragent']['bank'];

}
if (isset($jsonData['sites'][$index18]['contragent']['bankAddress'])) {
    $model->sites[$index18]->contragent->bankAddress = $jsonData['sites'][$index18]['contragent']['bankAddress'];

}
if (isset($jsonData['sites'][$index18]['contragent']['corrAccount'])) {
    $model->sites[$index18]->contragent->corrAccount = $jsonData['sites'][$index18]['contragent']['corrAccount'];

}
if (isset($jsonData['sites'][$index18]['contragent']['bankAccount'])) {
    $model->sites[$index18]->contragent->bankAccount = $jsonData['sites'][$index18]['contragent']['bankAccount'];

}
if (isset($jsonData['sites'][$index18]['contragent']['code'])) {
    $model->sites[$index18]->contragent->code = $jsonData['sites'][$index18]['contragent']['code'];

}
if (isset($jsonData['sites'][$index18]['contragent']['countryIso'])) {
    $model->sites[$index18]->contragent->countryIso = $jsonData['sites'][$index18]['contragent']['countryIso'];

}
if (isset($jsonData['sites'][$index18]['contragent']['vatRate'])) {
    $model->sites[$index18]->contragent->vatRate = $jsonData['sites'][$index18]['contragent']['vatRate'];

}


}
if (isset($jsonData['sites'][$index18]['countryIso'])) {
    $model->sites[$index18]->countryIso = $jsonData['sites'][$index18]['countryIso'];

}


}

}



    return $model;
}
