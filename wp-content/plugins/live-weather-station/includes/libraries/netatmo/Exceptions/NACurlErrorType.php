<?php

namespace WeatherStation\SDK\Netatmo\Exceptions;

/**
 * @package Includes\Libraries
 * @author Originally written by Thomas Rosenblatt <thomas.rosenblatt@netatmo.com>.
 * @author Modified by Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since 3.0.0
 */
class NAWPErrorType extends NAClientException
{
    function __construct($code, $message)
    {
        parent::__construct($code, $message, WP_ERROR_TYPE);
    }
}

?>
