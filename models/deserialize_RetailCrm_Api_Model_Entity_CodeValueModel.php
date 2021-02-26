<?php

function deserialize_RetailCrm_Api_Model_Entity_CodeValueModel(array $jsonData): RetailCrm\Api\Model\Entity\CodeValueModel
{
    
$model = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['value'])) {
    $model->value = $jsonData['value'];

}



    return $model;
}
