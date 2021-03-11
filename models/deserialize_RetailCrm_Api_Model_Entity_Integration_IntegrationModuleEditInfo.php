<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_IntegrationModuleEditInfo(array $jsonData): RetailCrm\Api\Model\Entity\Integration\IntegrationModuleEditInfo
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\IntegrationModuleEditInfo();
if (isset($jsonData['mgTransport'])) {
    
$model->mgTransport = new RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration();
if (isset($jsonData['mgTransport']['token'])) {
    $model->mgTransport->token = $jsonData['mgTransport']['token'];

}
if (isset($jsonData['mgTransport']['isActive'])) {
    $model->mgTransport->isActive = $jsonData['mgTransport']['isActive'];

}
if (isset($jsonData['mgTransport']['webhookUrl'])) {
    $model->mgTransport->webhookUrl = $jsonData['mgTransport']['webhookUrl'];

}
if (isset($jsonData['mgTransport']['endpointUrl'])) {
    $model->mgTransport->endpointUrl = $jsonData['mgTransport']['endpointUrl'];

}


}
if (isset($jsonData['mgBot'])) {
    
$model->mgBot = new RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration();
if (isset($jsonData['mgBot']['isActive'])) {
    $model->mgBot->isActive = $jsonData['mgBot']['isActive'];

}
if (isset($jsonData['mgBot']['logo'])) {
    $model->mgBot->logo = $jsonData['mgBot']['logo'];

}
if (isset($jsonData['mgBot']['token'])) {
    $model->mgBot->token = $jsonData['mgBot']['token'];

}
if (isset($jsonData['mgBot']['name'])) {
    $model->mgBot->name = $jsonData['mgBot']['name'];

}


}
if (isset($jsonData['notExistUsersIds'])) {
    $model->notExistUsersIds = $jsonData['notExistUsersIds'];

}
if (isset($jsonData['notExistSiteCodes'])) {
    $model->notExistSiteCodes = $jsonData['notExistSiteCodes'];

}



    return $model;
}
