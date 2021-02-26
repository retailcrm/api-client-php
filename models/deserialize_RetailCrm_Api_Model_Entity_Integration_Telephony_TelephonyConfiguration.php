<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Telephony_TelephonyConfiguration(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration();
if (isset($jsonData['makeCallUrl'])) {
    $model->makeCallUrl = $jsonData['makeCallUrl'];

}
if (isset($jsonData['allowEdit'])) {
    $model->allowEdit = $jsonData['allowEdit'];

}
if (isset($jsonData['inputEventSupported'])) {
    $model->inputEventSupported = $jsonData['inputEventSupported'];

}
if (isset($jsonData['outputEventSupported'])) {
    $model->outputEventSupported = $jsonData['outputEventSupported'];

}
if (isset($jsonData['hangupEventSupported'])) {
    $model->hangupEventSupported = $jsonData['hangupEventSupported'];

}
if (isset($jsonData['changeUserStatusUrl'])) {
    $model->changeUserStatusUrl = $jsonData['changeUserStatusUrl'];

}
if (isset($jsonData['additionalCodes'])) {
    $model->additionalCodes = [];
foreach (array_keys($jsonData['additionalCodes']) as $index28) {
    
$model->additionalCodes[$index28] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes();
if (isset($jsonData['additionalCodes'][$index28]['userId'])) {
    $model->additionalCodes[$index28]->userId = $jsonData['additionalCodes'][$index28]['userId'];

}
if (isset($jsonData['additionalCodes'][$index28]['code'])) {
    $model->additionalCodes[$index28]->code = $jsonData['additionalCodes'][$index28]['code'];

}


}

}
if (isset($jsonData['externalPhones'])) {
    $model->externalPhones = [];
foreach (array_keys($jsonData['externalPhones']) as $index27) {
    
$model->externalPhones[$index27] = new RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones();
if (isset($jsonData['externalPhones'][$index27]['siteCode'])) {
    $model->externalPhones[$index27]->siteCode = $jsonData['externalPhones'][$index27]['siteCode'];

}
if (isset($jsonData['externalPhones'][$index27]['externalPhone'])) {
    $model->externalPhones[$index27]->externalPhone = $jsonData['externalPhones'][$index27]['externalPhone'];

}


}

}



    return $model;
}
