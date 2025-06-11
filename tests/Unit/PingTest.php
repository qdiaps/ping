<?php declare(strict_types=1);

use Qdiaps\Ping\Ping;

describe('Ping', function () {
    it('check url', function () {
        $result = new Ping('https://google.com')
            ->check();

        expect($result)->toBeTrue();
    });

    it('get url', function () {
        $url = 'https://google.com';
        $result = new Ping($url)
            ->getUrl();

        expect($result)->toBe($url);
    });
});
