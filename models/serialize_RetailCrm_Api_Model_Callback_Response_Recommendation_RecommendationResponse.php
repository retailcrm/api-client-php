<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Recommendation_RecommendationResponse(RetailCrm\Api\Model\Callback\Response\Recommendation\RecommendationResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->by) {
    $jsonData["by"] = $model->by;
}
if (null !== $model->ids) {
    $jsonData["ids"] = $model->ids;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
