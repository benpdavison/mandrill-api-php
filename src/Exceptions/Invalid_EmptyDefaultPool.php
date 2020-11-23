<?php

namespace Mandrill\Exceptions;

/**
 * You cannot remove the last IP from your default IP pool.
 */
class Invalid_EmptyDefaultPool extends \Mandrill\Exceptions\Error
{
}