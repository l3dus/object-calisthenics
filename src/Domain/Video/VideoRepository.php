<?php

namespace Ledus\Calisthenics\Domain\Video;

use Ledus\Calisthenics\Domain\Student\Student;

interface VideoRepository
{
    public function add(Video $video): self;
    public function videosFor(Student $student): array;
}
