<?php

namespace Ornicar\MessageBundle\FormModel;

abstract class AbstractMessage
{
    /**
     * The mesage body
     *
     * @var string
     */
    protected $body;

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param  string
     * @return null
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

}
