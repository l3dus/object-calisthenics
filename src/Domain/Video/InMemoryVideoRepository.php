<?php

namespace Ledus\Calisthenics\Domain\Video;

use Ledus\Calisthenics\Domain\Student\Student;

class InMemoryVideoRepository implements VideoRepository
{
    private array $videos;

    public function add(Video $video): self
    {
        $this->videos[] = $video;

        return $this;
    }

    public function videosFor(Student $student): array
    {
        return array_filter(
            $this->videos,
            fn (Video $video) => $video->getAgeLimit() <= $student->age()
        );
    }
}
