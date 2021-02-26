<?php

function deserialize_RetailCrm_Api_Model_Entity_Source(array $jsonData): RetailCrm\Api\Model\Entity\Source
{
    
$model = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['source'])) {
    $model->source = $jsonData['source'];

}
if (isset($jsonData['medium'])) {
    $model->medium = $jsonData['medium'];

}
if (isset($jsonData['campaign'])) {
    $model->campaign = $jsonData['campaign'];

}
if (isset($jsonData['keyword'])) {
    $model->keyword = $jsonData['keyword'];

}
if (isset($jsonData['content'])) {
    $model->content = $jsonData['content'];

}



    return $model;
}
