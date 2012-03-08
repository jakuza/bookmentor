<?php

namespace Avoja\BookMentorBundle\Twitter;

class TwitterStub implements TwitterInterface
{
    public function getKeywordsFor($username)
    {
        return array('cenerentola', 'siddartha', 'php');
    }
}
