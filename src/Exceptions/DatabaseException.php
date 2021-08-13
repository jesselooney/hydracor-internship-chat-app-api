<?php
namespace App\Exceptions;

use App\Exceptions\ClientSafeException;
use GraphQL\Error\ClientAware;

/**
 * A client safe exception for data retrieval errors
 */
class DatabaseException extends ClientSafeException implements ClientAware
{
    public function getCategory(): string
    {
        return 'database';
    }
}