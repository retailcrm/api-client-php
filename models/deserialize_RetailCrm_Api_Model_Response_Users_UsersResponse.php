<?php

function deserialize_RetailCrm_Api_Model_Response_Users_UsersResponse(array $jsonData): RetailCrm\Api\Model\Response\Users\UsersResponse
{
    
$model = new RetailCrm\Api\Model\Response\Users\UsersResponse();
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
if (isset($jsonData['users'])) {
    $model->users = [];
foreach (array_keys($jsonData['users']) as $index18) {
    
$model->users[$index18] = new RetailCrm\Api\Model\Entity\Users\User();
if (isset($jsonData['users'][$index18]['id'])) {
    $model->users[$index18]->id = $jsonData['users'][$index18]['id'];

}
if (isset($jsonData['users'][$index18]['createdAt'])) {
    $model->users[$index18]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['users'][$index18]['createdAt']);

}
if (isset($jsonData['users'][$index18]['active'])) {
    $model->users[$index18]->active = $jsonData['users'][$index18]['active'];

}
if (isset($jsonData['users'][$index18]['email'])) {
    $model->users[$index18]->email = $jsonData['users'][$index18]['email'];

}
if (isset($jsonData['users'][$index18]['firstName'])) {
    $model->users[$index18]->firstName = $jsonData['users'][$index18]['firstName'];

}
if (isset($jsonData['users'][$index18]['lastName'])) {
    $model->users[$index18]->lastName = $jsonData['users'][$index18]['lastName'];

}
if (isset($jsonData['users'][$index18]['patronymic'])) {
    $model->users[$index18]->patronymic = $jsonData['users'][$index18]['patronymic'];

}
if (isset($jsonData['users'][$index18]['photoUrl'])) {
    $model->users[$index18]->photoUrl = $jsonData['users'][$index18]['photoUrl'];

}
if (isset($jsonData['users'][$index18]['phone'])) {
    $model->users[$index18]->phone = $jsonData['users'][$index18]['phone'];

}
if (isset($jsonData['users'][$index18]['status'])) {
    $model->users[$index18]->status = $jsonData['users'][$index18]['status'];

}
if (isset($jsonData['users'][$index18]['online'])) {
    $model->users[$index18]->online = $jsonData['users'][$index18]['online'];

}
if (isset($jsonData['users'][$index18]['isAdmin'])) {
    $model->users[$index18]->isAdmin = $jsonData['users'][$index18]['isAdmin'];

}
if (isset($jsonData['users'][$index18]['isManager'])) {
    $model->users[$index18]->isManager = $jsonData['users'][$index18]['isManager'];

}
if (isset($jsonData['users'][$index18]['groups'])) {
    $model->users[$index18]->groups = [];
foreach (array_keys($jsonData['users'][$index18]['groups']) as $index38) {
    
$model->users[$index18]->groups[$index38] = new RetailCrm\Api\Model\Entity\Users\Group();
if (isset($jsonData['users'][$index18]['groups'][$index38]['id'])) {
    $model->users[$index18]->groups[$index38]->id = $jsonData['users'][$index18]['groups'][$index38]['id'];

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['name'])) {
    $model->users[$index18]->groups[$index38]->name = $jsonData['users'][$index18]['groups'][$index38]['name'];

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['signatureTemplate'])) {
    $model->users[$index18]->groups[$index38]->signatureTemplate = $jsonData['users'][$index18]['groups'][$index38]['signatureTemplate'];

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['code'])) {
    $model->users[$index18]->groups[$index38]->code = $jsonData['users'][$index18]['groups'][$index38]['code'];

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['isManager'])) {
    $model->users[$index18]->groups[$index38]->isManager = $jsonData['users'][$index18]['groups'][$index38]['isManager'];

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['isPosManager'])) {
    $model->users[$index18]->groups[$index38]->isPosManager = $jsonData['users'][$index18]['groups'][$index38]['isPosManager'];

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['isDeliveryMen'])) {
    $model->users[$index18]->groups[$index38]->isDeliveryMen = $jsonData['users'][$index18]['groups'][$index38]['isDeliveryMen'];

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['deliveryTypes'])) {
    $model->users[$index18]->groups[$index38]->deliveryTypes = [];
foreach (array_keys($jsonData['users'][$index18]['groups'][$index38]['deliveryTypes']) as $index65) {
    $model->users[$index18]->groups[$index38]->deliveryTypes[$index65] = $jsonData['users'][$index18]['groups'][$index38]['deliveryTypes'][$index65];

}

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['breakdownOrderTypes'])) {
    $model->users[$index18]->groups[$index38]->breakdownOrderTypes = [];
foreach (array_keys($jsonData['users'][$index18]['groups'][$index38]['breakdownOrderTypes']) as $index71) {
    $model->users[$index18]->groups[$index38]->breakdownOrderTypes[$index71] = $jsonData['users'][$index18]['groups'][$index38]['breakdownOrderTypes'][$index71];

}

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['breakdownSites'])) {
    $model->users[$index18]->groups[$index38]->breakdownSites = [];
foreach (array_keys($jsonData['users'][$index18]['groups'][$index38]['breakdownSites']) as $index66) {
    $model->users[$index18]->groups[$index38]->breakdownSites[$index66] = $jsonData['users'][$index18]['groups'][$index38]['breakdownSites'][$index66];

}

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['breakdownOrderMethods'])) {
    $model->users[$index18]->groups[$index38]->breakdownOrderMethods = [];
foreach (array_keys($jsonData['users'][$index18]['groups'][$index38]['breakdownOrderMethods']) as $index73) {
    $model->users[$index18]->groups[$index38]->breakdownOrderMethods[$index73] = $jsonData['users'][$index18]['groups'][$index38]['breakdownOrderMethods'][$index73];

}

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['grantedOrderTypes'])) {
    $model->users[$index18]->groups[$index38]->grantedOrderTypes = [];
foreach (array_keys($jsonData['users'][$index18]['groups'][$index38]['grantedOrderTypes']) as $index69) {
    $model->users[$index18]->groups[$index38]->grantedOrderTypes[$index69] = $jsonData['users'][$index18]['groups'][$index38]['grantedOrderTypes'][$index69];

}

}
if (isset($jsonData['users'][$index18]['groups'][$index38]['grantedSites'])) {
    $model->users[$index18]->groups[$index38]->grantedSites = [];
foreach (array_keys($jsonData['users'][$index18]['groups'][$index38]['grantedSites']) as $index64) {
    $model->users[$index18]->groups[$index38]->grantedSites[$index64] = $jsonData['users'][$index18]['groups'][$index38]['grantedSites'][$index64];

}

}


}

}
if (isset($jsonData['users'][$index18]['mgUserId'])) {
    $model->users[$index18]->mgUserId = $jsonData['users'][$index18]['mgUserId'];

}


}

}



    return $model;
}
