<?php declare(strict_types=1);

namespace Qdiaps\Ping;

class Ping
{
    /**
     * @var string URL address
     */
    protected string $url;

    /**
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Run checking URL address
     * @return bool Always TRUE
     */
    public function check(): bool
    {
        return true;
    }

    /**
     * @return string URL address
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
