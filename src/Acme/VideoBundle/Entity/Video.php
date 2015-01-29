<?php

namespace Acme\VideoBundle\Entity;

use LITC\VideoPlayerBundle\Entity\Video as BaseVideo;

/**
 * Video
 */
class Video extends BaseVideo
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
