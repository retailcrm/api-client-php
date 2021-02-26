<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Bot_BotConfiguration(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration();
if (isset($jsonData['isActive'])) {
    $model->isActive = $jsonData['isActive'];

}
if (isset($jsonData['logo'])) {
    $model->logo = $jsonData['logo'];

}
if (isset($jsonData['token'])) {
    $model->token = $jsonData['token'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
