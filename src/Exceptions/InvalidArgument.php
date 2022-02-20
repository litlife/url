<?php

namespace Litlife\Url\Exceptions;

use InvalidArgumentException;

class InvalidArgument extends InvalidArgumentException
{
    public static function invalidScheme(string $url): self
    {
        return new static("The scheme `{$url}` isn't valid. It should be either `http` or `https`.");
    }

    public static function segmentZeroDoesNotExist(): self
    {
        return new static("Segment 0 doesn't exist. Segments can be retrieved by using 1-based index or a negative index.");
    }

	public static function failedParseUrl(string $url): self
	{
		return new static("Url `$url` parse failed");
	}
}
