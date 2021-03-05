<?php

function deserialize_RetailCrm_Api_Model_Entity_Users_User(array $jsonData): RetailCrm\Api\Model\Entity\Users\User
{
    
$model = new RetailCrm\Api\Model\Entity\Users\User();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['email'])) {
    $model->email = $jsonData['email'];

}
if (isset($jsonData['firstName'])) {
    $model->firstName = $jsonData['firstName'];

}
if (isset($jsonData['lastName'])) {
    $model->lastName = $jsonData['lastName'];

}
if (isset($jsonData['patronymic'])) {
    $model->patronymic = $jsonData['patronymic'];

}
if (isset($jsonData['photoUrl'])) {
    $model->photoUrl = $jsonData['photoUrl'];

}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['online'])) {
    $model->online = $jsonData['online'];

}
if (isset($jsonData['isAdmin'])) {
    $model->isAdmin = $jsonData['isAdmin'];

}
if (isset($jsonData['isManager'])) {
    $model->isManager = $jsonData['isManager'];

}
if (isset($jsonData['groups'])) {
    $model->groups = [];
foreach (array_keys($jsonData['groups']) as $index19) {
    
$model->groups[$index19] = new RetailCrm\Api\Model\Entity\Users\Group();
if (isset($jsonData['groups'][$index19]['id'])) {
    $model->groups[$index19]->id = $jsonData['groups'][$index19]['id'];

}
if (isset($jsonData['groups'][$index19]['name'])) {
    $model->groups[$index19]->name = $jsonData['groups'][$index19]['name'];

}
if (isset($jsonData['groups'][$index19]['signatureTemplate'])) {
    $model->groups[$index19]->signatureTemplate = $jsonData['groups'][$index19]['signatureTemplate'];

}
if (isset($jsonData['groups'][$index19]['code'])) {
    $model->groups[$index19]->code = $jsonData['groups'][$index19]['code'];

}
if (isset($jsonData['groups'][$index19]['isManager'])) {
    $model->groups[$index19]->isManager = $jsonData['groups'][$index19]['isManager'];

}
if (isset($jsonData['groups'][$index19]['isPosManager'])) {
    $model->groups[$index19]->isPosManager = $jsonData['groups'][$index19]['isPosManager'];

}
if (isset($jsonData['groups'][$index19]['isDeliveryMen'])) {
    $model->groups[$index19]->isDeliveryMen = $jsonData['groups'][$index19]['isDeliveryMen'];

}
if (isset($jsonData['groups'][$index19]['deliveryTypes'])) {
    $model->groups[$index19]->deliveryTypes = [];
foreach (array_keys($jsonData['groups'][$index19]['deliveryTypes']) as $index46) {
    $model->groups[$index19]->deliveryTypes[$index46] = $jsonData['groups'][$index19]['deliveryTypes'][$index46];

}

}
if (isset($jsonData['groups'][$index19]['breakdownOrderTypes'])) {
    $model->groups[$index19]->breakdownOrderTypes = [];
foreach (array_keys($jsonData['groups'][$index19]['breakdownOrderTypes']) as $index52) {
    $model->groups[$index19]->breakdownOrderTypes[$index52] = $jsonData['groups'][$index19]['breakdownOrderTypes'][$index52];

}

}
if (isset($jsonData['groups'][$index19]['breakdownSites'])) {
    $model->groups[$index19]->breakdownSites = [];
foreach (array_keys($jsonData['groups'][$index19]['breakdownSites']) as $index47) {
    $model->groups[$index19]->breakdownSites[$index47] = $jsonData['groups'][$index19]['breakdownSites'][$index47];

}

}
if (isset($jsonData['groups'][$index19]['breakdownOrderMethods'])) {
    $model->groups[$index19]->breakdownOrderMethods = [];
foreach (array_keys($jsonData['groups'][$index19]['breakdownOrderMethods']) as $index54) {
    $model->groups[$index19]->breakdownOrderMethods[$index54] = $jsonData['groups'][$index19]['breakdownOrderMethods'][$index54];

}

}
if (isset($jsonData['groups'][$index19]['grantedOrderTypes'])) {
    $model->groups[$index19]->grantedOrderTypes = [];
foreach (array_keys($jsonData['groups'][$index19]['grantedOrderTypes']) as $index50) {
    $model->groups[$index19]->grantedOrderTypes[$index50] = $jsonData['groups'][$index19]['grantedOrderTypes'][$index50];

}

}
if (isset($jsonData['groups'][$index19]['grantedSites'])) {
    $model->groups[$index19]->grantedSites = [];
foreach (array_keys($jsonData['groups'][$index19]['grantedSites']) as $index45) {
    $model->groups[$index19]->grantedSites[$index45] = $jsonData['groups'][$index19]['grantedSites'][$index45];

}

}


}

}
if (isset($jsonData['mgUserId'])) {
    $model->mgUserId = $jsonData['mgUserId'];

}



    return $model;
}
