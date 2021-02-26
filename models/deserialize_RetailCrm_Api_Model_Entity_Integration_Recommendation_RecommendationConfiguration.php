<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Recommendation_RecommendationConfiguration(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration();
if (isset($jsonData['actions'])) {
    $model->actions = $jsonData['actions'];

}
if (isset($jsonData['addDefaultModes'])) {
    $model->addDefaultModes = $jsonData['addDefaultModes'];

}
if (isset($jsonData['modes'])) {
    $model->modes = [];
foreach (array_keys($jsonData['modes']) as $index18) {
    
$model->modes[$index18] = new RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode();
if (isset($jsonData['modes'][$index18]['code'])) {
    $model->modes[$index18]->code = $jsonData['modes'][$index18]['code'];

}
if (isset($jsonData['modes'][$index18]['names'])) {
    $model->modes[$index18]->names = $jsonData['modes'][$index18]['names'];

}


}

}



    return $model;
}
