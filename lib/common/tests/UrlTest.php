<?php

namespace AmpProject\Common;

use AmpProject\Url;
use PHPUnit\Framework\TestCase;

/**
 * Tests for AmpProject\Url.
 *
 * @covers  Url
 * @package ampproject/common
 */
class UrlTest extends TestCase
{

    public function dataIsValidImageSrc()
    {
        return [
            'absolute image URL' => ['https://example.com/image.jpg', true],

            'relative image URL with trailing slash' => ['/image.jpg', true],

            'relative image URL without trailing slash' => ['image.jpg', true],

            'data URI' => ['data:image/svg+xml,sagaedbaedbaergea', false],
        ];
    }

    /** @dataProvider dataIsValidImageSrc */
    public function testIsValidImageSrc($src, $expected)
    {
        $this->assertEquals($expected, Url::isValidImageSrc($src));
    }
}
