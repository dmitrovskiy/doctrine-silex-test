<?php

namespace App\Exception;

/**
 * Class ApplicationException
 *
 * @package App\Exception
 */
class ApplicationException extends \Exception
{
    protected $systemInfo = [];

    public function __construct(
        $message,
        $code = 0,
        \Exception $previous = null,
        $systemInfo = []
    ) {
        parent::__construct($message, $code, $previous);

        $this->systemInfo = $systemInfo;
    }

    public function getSystemInfo()
    {
        return $this->systemInfo;
    }

    public function setSystemInfo($systemInfo)
    {
        $this->systemInfo = $systemInfo;
    }
}