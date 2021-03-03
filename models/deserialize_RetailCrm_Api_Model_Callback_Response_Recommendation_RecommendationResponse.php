<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Recommendation_RecommendationResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Recommendation\RecommendationResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Recommendation\RecommendationResponse();
if (isset($jsonData['by'])) {
    $model->by = $jsonData['by'];

}
if (isset($jsonData['ids'])) {
    $model->ids = $jsonData['ids'];

}



    return $model;
}
