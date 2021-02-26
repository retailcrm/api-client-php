<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Recommendation_Mode(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['names'])) {
    $model->names = $jsonData['names'];

}



    return $model;
}
