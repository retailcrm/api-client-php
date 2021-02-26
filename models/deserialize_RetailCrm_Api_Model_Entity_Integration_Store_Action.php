<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Store_Action(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Store\Action
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Store\Action();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['url'])) {
    $model->url = $jsonData['url'];

}
if (isset($jsonData['callPoints'])) {
    $model->callPoints = $jsonData['callPoints'];

}



    return $model;
}
