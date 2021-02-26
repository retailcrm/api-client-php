<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Recommendation_RecommendationConfiguration(RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->actions) {
    $jsonData["actions"] = $model->actions;
}
if (null !== $model->addDefaultModes) {
    $jsonData["addDefaultModes"] = $model->addDefaultModes;
}
if (null !== $model->modes) {
    $jsonData["modes"] = [];
foreach (array_keys($model->modes) as $index9) {
    $jsonData["modes"][$index9] = [];
if (null !== $model->modes[$index9]->code) {
    $jsonData["modes"][$index9]["code"] = $model->modes[$index9]->code;
}
if (null !== $model->modes[$index9]->names) {
    $jsonData["modes"][$index9]["names"] = $model->modes[$index9]->names;
}

if (0 === \count($jsonData["modes"][$index9])) {
    $jsonData["modes"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
