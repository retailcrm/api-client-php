<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Transport_TransportConfiguration(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration();
if (isset($jsonData['token'])) {
    $model->token = $jsonData['token'];

}
if (isset($jsonData['isActive'])) {
    $model->isActive = $jsonData['isActive'];

}
if (isset($jsonData['webhookUrl'])) {
    $model->webhookUrl = $jsonData['webhookUrl'];

}
if (isset($jsonData['endpointUrl'])) {
    $model->endpointUrl = $jsonData['endpointUrl'];

}



    return $model;
}
