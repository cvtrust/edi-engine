<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 2:47 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine;



use CVTrust\EdiEngine\EdiEngine\Common\StreamInterface;

abstract class DataWriter
{
    abstract function WriteToStream(EdiBatch $batch, StreamInterface $stream): void;

    abstract function WriteToString(EdiBatch $batch): string;
}