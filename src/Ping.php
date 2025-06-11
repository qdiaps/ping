<?php declare(strict_types=1);

namespace Qdiaps\Ping;

class Ping
{
    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function check(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
