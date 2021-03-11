<?php

function deserialize_RetailCrm_Api_Model_Response_Integration_IntegrationModulesEditResponse(array $jsonData): RetailCrm\Api\Model\Response\Integration\IntegrationModulesEditResponse
{
    
$model = new RetailCrm\Api\Model\Response\Integration\IntegrationModulesEditResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['info'])) {
    
$model->info = new RetailCrm\Api\Model\Entity\Integration\IntegrationModuleEditInfo();
if (isset($jsonData['info']['mgTransport'])) {
    
$model->info->mgTransport = new RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration();
if (isset($jsonData['info']['mgTransport']['token'])) {
    $model->info->mgTransport->token = $jsonData['info']['mgTransport']['token'];

}
if (isset($jsonData['info']['mgTransport']['isActive'])) {
    $model->info->mgTransport->isActive = $jsonData['info']['mgTransport']['isActive'];

}
if (isset($jsonData['info']['mgTransport']['webhookUrl'])) {
    $model->info->mgTransport->webhookUrl = $jsonData['info']['mgTransport']['webhookUrl'];

}
if (isset($jsonData['info']['mgTransport']['endpointUrl'])) {
    $model->info->mgTransport->endpointUrl = $jsonData['info']['mgTransport']['endpointUrl'];

}


}
if (isset($jsonData['info']['mgBot'])) {
    
$model->info->mgBot = new RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration();
if (isset($jsonData['info']['mgBot']['isActive'])) {
    $model->info->mgBot->isActive = $jsonData['info']['mgBot']['isActive'];

}
if (isset($jsonData['info']['mgBot']['logo'])) {
    $model->info->mgBot->logo = $jsonData['info']['mgBot']['logo'];

}
if (isset($jsonData['info']['mgBot']['token'])) {
    $model->info->mgBot->token = $jsonData['info']['mgBot']['token'];

}
if (isset($jsonData['info']['mgBot']['name'])) {
    $model->info->mgBot->name = $jsonData['info']['mgBot']['name'];

}


}
if (isset($jsonData['info']['notExistUsersIds'])) {
    $model->info->notExistUsersIds = $jsonData['info']['notExistUsersIds'];

}
if (isset($jsonData['info']['notExistSiteCodes'])) {
    $model->info->notExistSiteCodes = $jsonData['info']['notExistSiteCodes'];

}


}



    return $model;
}
