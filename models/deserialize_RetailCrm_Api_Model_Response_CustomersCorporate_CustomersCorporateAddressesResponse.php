<?php

function deserialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateAddressesResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateAddressesResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateAddressesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pagination'])) {
    
$model->pagination = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['pagination']['limit'])) {
    $model->pagination->limit = $jsonData['pagination']['limit'];

}
if (isset($jsonData['pagination']['totalCount'])) {
    $model->pagination->totalCount = $jsonData['pagination']['totalCount'];

}
if (isset($jsonData['pagination']['currentPage'])) {
    $model->pagination->currentPage = $jsonData['pagination']['currentPage'];

}
if (isset($jsonData['pagination']['totalPageCount'])) {
    $model->pagination->totalPageCount = $jsonData['pagination']['totalPageCount'];

}


}
if (isset($jsonData['addresses'])) {
    $model->addresses = [];
foreach (array_keys($jsonData['addresses']) as $index22) {
    
$model->addresses[$index22] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['addresses'][$index22]['id'])) {
    $model->addresses[$index22]->id = $jsonData['addresses'][$index22]['id'];

}
if (isset($jsonData['addresses'][$index22]['name'])) {
    $model->addresses[$index22]->name = $jsonData['addresses'][$index22]['name'];

}
if (isset($jsonData['addresses'][$index22]['isMain'])) {
    $model->addresses[$index22]->isMain = $jsonData['addresses'][$index22]['isMain'];

}
if (isset($jsonData['addresses'][$index22]['index'])) {
    $model->addresses[$index22]->index = $jsonData['addresses'][$index22]['index'];

}
if (isset($jsonData['addresses'][$index22]['countryIso'])) {
    $model->addresses[$index22]->countryIso = $jsonData['addresses'][$index22]['countryIso'];

}
if (isset($jsonData['addresses'][$index22]['region'])) {
    $model->addresses[$index22]->region = $jsonData['addresses'][$index22]['region'];

}
if (isset($jsonData['addresses'][$index22]['regionId'])) {
    $model->addresses[$index22]->regionId = $jsonData['addresses'][$index22]['regionId'];

}
if (isset($jsonData['addresses'][$index22]['city'])) {
    $model->addresses[$index22]->city = $jsonData['addresses'][$index22]['city'];

}
if (isset($jsonData['addresses'][$index22]['cityId'])) {
    $model->addresses[$index22]->cityId = $jsonData['addresses'][$index22]['cityId'];

}
if (isset($jsonData['addresses'][$index22]['cityType'])) {
    $model->addresses[$index22]->cityType = $jsonData['addresses'][$index22]['cityType'];

}
if (isset($jsonData['addresses'][$index22]['street'])) {
    $model->addresses[$index22]->street = $jsonData['addresses'][$index22]['street'];

}
if (isset($jsonData['addresses'][$index22]['streetId'])) {
    $model->addresses[$index22]->streetId = $jsonData['addresses'][$index22]['streetId'];

}
if (isset($jsonData['addresses'][$index22]['streetType'])) {
    $model->addresses[$index22]->streetType = $jsonData['addresses'][$index22]['streetType'];

}
if (isset($jsonData['addresses'][$index22]['building'])) {
    $model->addresses[$index22]->building = $jsonData['addresses'][$index22]['building'];

}
if (isset($jsonData['addresses'][$index22]['flat'])) {
    $model->addresses[$index22]->flat = $jsonData['addresses'][$index22]['flat'];

}
if (isset($jsonData['addresses'][$index22]['floor'])) {
    $model->addresses[$index22]->floor = $jsonData['addresses'][$index22]['floor'];

}
if (isset($jsonData['addresses'][$index22]['block'])) {
    $model->addresses[$index22]->block = $jsonData['addresses'][$index22]['block'];

}
if (isset($jsonData['addresses'][$index22]['house'])) {
    $model->addresses[$index22]->house = $jsonData['addresses'][$index22]['house'];

}
if (isset($jsonData['addresses'][$index22]['housing'])) {
    $model->addresses[$index22]->housing = $jsonData['addresses'][$index22]['housing'];

}
if (isset($jsonData['addresses'][$index22]['metro'])) {
    $model->addresses[$index22]->metro = $jsonData['addresses'][$index22]['metro'];

}
if (isset($jsonData['addresses'][$index22]['notes'])) {
    $model->addresses[$index22]->notes = $jsonData['addresses'][$index22]['notes'];

}
if (isset($jsonData['addresses'][$index22]['text'])) {
    $model->addresses[$index22]->text = $jsonData['addresses'][$index22]['text'];

}
if (isset($jsonData['addresses'][$index22]['externalId'])) {
    $model->addresses[$index22]->externalId = $jsonData['addresses'][$index22]['externalId'];

}


}

}



    return $model;
}
