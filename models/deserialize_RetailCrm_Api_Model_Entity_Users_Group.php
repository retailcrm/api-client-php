<?php

function deserialize_RetailCrm_Api_Model_Entity_Users_Group(array $jsonData): RetailCrm\Api\Model\Entity\Users\Group
{
    
$model = new RetailCrm\Api\Model\Entity\Users\Group();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['signatureTemplate'])) {
    $model->signatureTemplate = $jsonData['signatureTemplate'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['isManager'])) {
    $model->isManager = $jsonData['isManager'];

}
if (isset($jsonData['isPosManager'])) {
    $model->isPosManager = $jsonData['isPosManager'];

}
if (isset($jsonData['isDeliveryMen'])) {
    $model->isDeliveryMen = $jsonData['isDeliveryMen'];

}
if (isset($jsonData['deliveryTypes'])) {
    $model->deliveryTypes = [];
foreach (array_keys($jsonData['deliveryTypes']) as $index26) {
    $model->deliveryTypes[$index26] = $jsonData['deliveryTypes'][$index26];

}

}
if (isset($jsonData['breakdownOrderTypes'])) {
    $model->breakdownOrderTypes = [];
foreach (array_keys($jsonData['breakdownOrderTypes']) as $index32) {
    $model->breakdownOrderTypes[$index32] = $jsonData['breakdownOrderTypes'][$index32];

}

}
if (isset($jsonData['breakdownSites'])) {
    $model->breakdownSites = [];
foreach (array_keys($jsonData['breakdownSites']) as $index27) {
    $model->breakdownSites[$index27] = $jsonData['breakdownSites'][$index27];

}

}
if (isset($jsonData['breakdownOrderMethods'])) {
    $model->breakdownOrderMethods = [];
foreach (array_keys($jsonData['breakdownOrderMethods']) as $index34) {
    $model->breakdownOrderMethods[$index34] = $jsonData['breakdownOrderMethods'][$index34];

}

}
if (isset($jsonData['grantedOrderTypes'])) {
    $model->grantedOrderTypes = [];
foreach (array_keys($jsonData['grantedOrderTypes']) as $index30) {
    $model->grantedOrderTypes[$index30] = $jsonData['grantedOrderTypes'][$index30];

}

}
if (isset($jsonData['grantedSites'])) {
    $model->grantedSites = [];
foreach (array_keys($jsonData['grantedSites']) as $index25) {
    $model->grantedSites[$index25] = $jsonData['grantedSites'][$index25];

}

}



    return $model;
}
