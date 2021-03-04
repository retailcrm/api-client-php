<?php

function deserialize_RetailCrm_Api_Model_Response_Settings_SettingsResponse(array $jsonData): RetailCrm\Api\Model\Response\Settings\SettingsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Settings\SettingsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['settings'])) {
    
$model->settings = new RetailCrm\Api\Model\Entity\Settings\Settings();
if (isset($jsonData['settings']['default_currency'])) {
    
$model->settings->defaultCurrency = new RetailCrm\Api\Model\Entity\Settings\Value();
if (isset($jsonData['settings']['default_currency']['value'])) {
    $model->settings->defaultCurrency->value = $jsonData['settings']['default_currency']['value'];

}
if (isset($jsonData['settings']['default_currency']['updated_at'])) {
    $model->settings->defaultCurrency->updatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['settings']['default_currency']['updated_at']);

}


}
if (isset($jsonData['settings']['system_language'])) {
    
$model->settings->systemLanguage = new RetailCrm\Api\Model\Entity\Settings\Value();
if (isset($jsonData['settings']['system_language']['value'])) {
    $model->settings->systemLanguage->value = $jsonData['settings']['system_language']['value'];

}
if (isset($jsonData['settings']['system_language']['updated_at'])) {
    $model->settings->systemLanguage->updatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['settings']['system_language']['updated_at']);

}


}
if (isset($jsonData['settings']['timezone'])) {
    
$model->settings->timezone = new RetailCrm\Api\Model\Entity\Settings\Value();
if (isset($jsonData['settings']['timezone']['value'])) {
    $model->settings->timezone->value = $jsonData['settings']['timezone']['value'];

}
if (isset($jsonData['settings']['timezone']['updated_at'])) {
    $model->settings->timezone->updatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['settings']['timezone']['updated_at']);

}


}


}



    return $model;
}
