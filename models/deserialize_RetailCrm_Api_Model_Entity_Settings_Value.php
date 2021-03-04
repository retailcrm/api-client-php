<?php

function deserialize_RetailCrm_Api_Model_Entity_Settings_Value(array $jsonData): RetailCrm\Api\Model\Entity\Settings\Value
{
    
$model = new RetailCrm\Api\Model\Entity\Settings\Value();
if (isset($jsonData['value'])) {
    $model->value = $jsonData['value'];

}
if (isset($jsonData['updated_at'])) {
    $model->updatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['updated_at']);

}



    return $model;
}
