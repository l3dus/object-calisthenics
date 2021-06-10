<?php

namespace Ledus\Calisthenics\Tests\Unit\Domain\Video;

use Ledus\Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
    public function testMakingAVideoPublicMustWork()
    {
        $video = new Video();
        $video->publish();

        self::assertTrue($video->isPublic());
    }
}
