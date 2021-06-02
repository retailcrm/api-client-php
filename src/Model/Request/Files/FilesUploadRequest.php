<?php

/**
 * PHP version 7.3
 *
 * @category FilesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Files
 */

namespace RetailCrm\Api\Model\Request\Files;

use Psr\Http\Message\StreamInterface;
use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class FilesUploadRequest
 *
 * @category FilesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Files
 */
class FilesUploadRequest implements RequestInterface
{
    /**
     * @var StreamInterface
     *
     * @Form\Type("Psr\Http\Message\StreamInterface")
     * @Form\SerializedName("file")
     */
    public $file;

    /**
     * FilesUploadRequest constructor.
     *
     * @param \Psr\Http\Message\StreamInterface $file
     */
    public function __construct(StreamInterface $file)
    {
        $this->file = $file;
    }
}
