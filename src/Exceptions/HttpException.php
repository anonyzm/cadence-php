<?php

namespace Anonyzm\CadencePhp;

class HttpException extends \Exception
{
    public function __construct(
        protected $message = "",
        protected $content = "",
        protected $code = 0,
        protected $previous = null
    )
    {}

    public function getContent(): string
    {
        return $this->content;
    }
}