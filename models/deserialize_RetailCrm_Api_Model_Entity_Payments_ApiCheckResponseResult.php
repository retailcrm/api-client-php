<?php

function deserialize_RetailCrm_Api_Model_Entity_Payments_ApiCheckResponseResult(array $jsonData): RetailCrm\Api\Model\Entity\Payments\ApiCheckResponseResult
{
    
$model = new RetailCrm\Api\Model\Entity\Payments\ApiCheckResponseResult();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['errorMsg'])) {
    $model->errorMsg = $jsonData['errorMsg'];

}



    return $model;
}
