<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 4:11 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Common;


class MemoryStream implements StreamInterface
{

    private $resource;
    private $chunkSize = 4096;

    /** @var int */
    private $size;

    public function __construct($body = "", $chunkSize = 4096)
    {
        $this->chunkSize = $chunkSize;
        $this->resource = fopen('php://memory', 'rw+');
        if (null !== $chunkSize) {
            stream_set_read_buffer($this->resource, $chunkSize);
            stream_set_chunk_size($this->resource, $chunkSize);
        }
        $this->size = (int) fwrite($this->resource, $body);
        fseek($this->resource, 0);
    }

    public function __toString()
    {
        return $this->getContents();
    }

    public function close()
    {
        fclose($this->resource);
    }

    public function detach()
    {
        $resource = $this->resource;
        $this->resource = null;
        return $resource;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function tell()
    {
        return ftell($this->resource);
    }

    public function eof()
    {
        return feof($this->resource);
    }

    public function isSeekable()
    {
        return true;
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        fseek($this->resource, $offset, $whence);
    }

    public function rewind()
    {
        $this->seek(0);
    }

    public function isWritable()
    {
        return true;
    }

    public function write($string)
    {
        $this->size += (int) fwrite($this->resource, $string);
    }

    public function isReadable()
    {
        return true;
    }

    public function read($length): string
    {
        return fread($this->resource, $length);
    }

    public function getContents(): string
    {
        $this->rewind();
        $contents = '';

        while (! $this->eof()) {
            $contents .= $this->read($this->chunkSize);
        }
        return $contents;
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function getMetadata($key = null)
    {
        $metadata = stream_get_meta_data($this->resource);
        if (null === $key) {
            return $metadata;
        }
        return $metadata[$key];
    }
}