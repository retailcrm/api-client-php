<?php

function deserialize_RetailCrm_Api_Model_Response_Users_UsersGetResponse(array $jsonData): RetailCrm\Api\Model\Response\Users\UsersGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\Users\UsersGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['user'])) {
    
$model->user = new RetailCrm\Api\Model\Entity\Users\User();
if (isset($jsonData['user']['id'])) {
    $model->user->id = $jsonData['user']['id'];

}
if (isset($jsonData['user']['createdAt'])) {
    $model->user->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['user']['createdAt']);

}
if (isset($jsonData['user']['active'])) {
    $model->user->active = $jsonData['user']['active'];

}
if (isset($jsonData['user']['email'])) {
    $model->user->email = $jsonData['user']['email'];

}
if (isset($jsonData['user']['firstName'])) {
    $model->user->firstName = $jsonData['user']['firstName'];

}
if (isset($jsonData['user']['lastName'])) {
    $model->user->lastName = $jsonData['user']['lastName'];

}
if (isset($jsonData['user']['patronymic'])) {
    $model->user->patronymic = $jsonData['user']['patronymic'];

}
if (isset($jsonData['user']['photoUrl'])) {
    $model->user->photoUrl = $jsonData['user']['photoUrl'];

}
if (isset($jsonData['user']['phone'])) {
    $model->user->phone = $jsonData['user']['phone'];

}
if (isset($jsonData['user']['status'])) {
    $model->user->status = $jsonData['user']['status'];

}
if (isset($jsonData['user']['online'])) {
    $model->user->online = $jsonData['user']['online'];

}
if (isset($jsonData['user']['isAdmin'])) {
    $model->user->isAdmin = $jsonData['user']['isAdmin'];

}
if (isset($jsonData['user']['isManager'])) {
    $model->user->isManager = $jsonData['user']['isManager'];

}
if (isset($jsonData['user']['groups'])) {
    $model->user->groups = [];
foreach (array_keys($jsonData['user']['groups']) as $index27) {
    
$model->user->groups[$index27] = new RetailCrm\Api\Model\Entity\Users\Group();
if (isset($jsonData['user']['groups'][$index27]['id'])) {
    $model->user->groups[$index27]->id = $jsonData['user']['groups'][$index27]['id'];

}
if (isset($jsonData['user']['groups'][$index27]['name'])) {
    $model->user->groups[$index27]->name = $jsonData['user']['groups'][$index27]['name'];

}
if (isset($jsonData['user']['groups'][$index27]['signatureTemplate'])) {
    $model->user->groups[$index27]->signatureTemplate = $jsonData['user']['groups'][$index27]['signatureTemplate'];

}
if (isset($jsonData['user']['groups'][$index27]['code'])) {
    $model->user->groups[$index27]->code = $jsonData['user']['groups'][$index27]['code'];

}
if (isset($jsonData['user']['groups'][$index27]['isManager'])) {
    $model->user->groups[$index27]->isManager = $jsonData['user']['groups'][$index27]['isManager'];

}
if (isset($jsonData['user']['groups'][$index27]['isPosManager'])) {
    $model->user->groups[$index27]->isPosManager = $jsonData['user']['groups'][$index27]['isPosManager'];

}
if (isset($jsonData['user']['groups'][$index27]['isDeliveryMen'])) {
    $model->user->groups[$index27]->isDeliveryMen = $jsonData['user']['groups'][$index27]['isDeliveryMen'];

}
if (isset($jsonData['user']['groups'][$index27]['deliveryTypes'])) {
    $model->user->groups[$index27]->deliveryTypes = [];
foreach (array_keys($jsonData['user']['groups'][$index27]['deliveryTypes']) as $index54) {
    $model->user->groups[$index27]->deliveryTypes[$index54] = $jsonData['user']['groups'][$index27]['deliveryTypes'][$index54];

}

}
if (isset($jsonData['user']['groups'][$index27]['breakdownOrderTypes'])) {
    $model->user->groups[$index27]->breakdownOrderTypes = [];
foreach (array_keys($jsonData['user']['groups'][$index27]['breakdownOrderTypes']) as $index60) {
    $model->user->groups[$index27]->breakdownOrderTypes[$index60] = $jsonData['user']['groups'][$index27]['breakdownOrderTypes'][$index60];

}

}
if (isset($jsonData['user']['groups'][$index27]['breakdownSites'])) {
    $model->user->groups[$index27]->breakdownSites = [];
foreach (array_keys($jsonData['user']['groups'][$index27]['breakdownSites']) as $index55) {
    $model->user->groups[$index27]->breakdownSites[$index55] = $jsonData['user']['groups'][$index27]['breakdownSites'][$index55];

}

}
if (isset($jsonData['user']['groups'][$index27]['breakdownOrderMethods'])) {
    $model->user->groups[$index27]->breakdownOrderMethods = [];
foreach (array_keys($jsonData['user']['groups'][$index27]['breakdownOrderMethods']) as $index62) {
    $model->user->groups[$index27]->breakdownOrderMethods[$index62] = $jsonData['user']['groups'][$index27]['breakdownOrderMethods'][$index62];

}

}
if (isset($jsonData['user']['groups'][$index27]['grantedOrderTypes'])) {
    $model->user->groups[$index27]->grantedOrderTypes = [];
foreach (array_keys($jsonData['user']['groups'][$index27]['grantedOrderTypes']) as $index58) {
    $model->user->groups[$index27]->grantedOrderTypes[$index58] = $jsonData['user']['groups'][$index27]['grantedOrderTypes'][$index58];

}

}
if (isset($jsonData['user']['groups'][$index27]['grantedSites'])) {
    $model->user->groups[$index27]->grantedSites = [];
foreach (array_keys($jsonData['user']['groups'][$index27]['grantedSites']) as $index53) {
    $model->user->groups[$index27]->grantedSites[$index53] = $jsonData['user']['groups'][$index27]['grantedSites'][$index53];

}

}


}

}
if (isset($jsonData['user']['mgUserId'])) {
    $model->user->mgUserId = $jsonData['user']['mgUserId'];

}


}



    return $model;
}
