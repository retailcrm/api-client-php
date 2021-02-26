<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Integration_IntegrationModule(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Integration\IntegrationModule
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Integration\IntegrationModule();
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['freeze'])) {
    $model->freeze = $jsonData['freeze'];

}



    return $model;
}
