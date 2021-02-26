<?php

function serialize_RetailCrm_Api_Model_Entity_Source(RetailCrm\Api\Model\Entity\Source $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->source) {
    $jsonData["source"] = $model->source;
}
if (null !== $model->medium) {
    $jsonData["medium"] = $model->medium;
}
if (null !== $model->campaign) {
    $jsonData["campaign"] = $model->campaign;
}
if (null !== $model->keyword) {
    $jsonData["keyword"] = $model->keyword;
}
if (null !== $model->content) {
    $jsonData["content"] = $model->content;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
