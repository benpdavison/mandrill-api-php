<?php

namespace Mandrill\Exceptions;

/**
 * A dedicated IP cannot be provisioned while another request is pending.
 */
class IP_ProvisionLimit extends \Mandrill\Exceptions\Error
{
}