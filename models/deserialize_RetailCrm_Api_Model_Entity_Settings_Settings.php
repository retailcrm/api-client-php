<?php

function deserialize_RetailCrm_Api_Model_Entity_Settings_Settings(array $jsonData): RetailCrm\Api\Model\Entity\Settings\Settings
{
    
$model = new RetailCrm\Api\Model\Entity\Settings\Settings();
if (isset($jsonData['default_currency'])) {
    
$model->defaultCurrency = new RetailCrm\Api\Model\Entity\Settings\Value();
if (isset($jsonData['default_currency']['value'])) {
    $model->defaultCurrency->value = $jsonData['default_currency']['value'];

}
if (isset($jsonData['default_currency']['updated_at'])) {
    $model->defaultCurrency->updatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['default_currency']['updated_at']);

}


}
if (isset($jsonData['system_language'])) {
    
$model->systemLanguage = new RetailCrm\Api\Model\Entity\Settings\Value();
if (isset($jsonData['system_language']['value'])) {
    $model->systemLanguage->value = $jsonData['system_language']['value'];

}
if (isset($jsonData['system_language']['updated_at'])) {
    $model->systemLanguage->updatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['system_language']['updated_at']);

}


}
if (isset($jsonData['timezone'])) {
    
$model->timezone = new RetailCrm\Api\Model\Entity\Settings\Value();
if (isset($jsonData['timezone']['value'])) {
    $model->timezone->value = $jsonData['timezone']['value'];

}
if (isset($jsonData['timezone']['updated_at'])) {
    $model->timezone->updatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['timezone']['updated_at']);

}


}



    return $model;
}
