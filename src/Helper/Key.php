<?php 
namespace Clusterpoint\Helper;

class Key
{
    /**
     * Holds name of the field for operations.
     *
     * @var string
     */
    public $string;

    /**
     * Sets output string for __toString().
     *
     * @param string $string
     * @return void
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * Whether object is accessed as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->string;
    }
}
