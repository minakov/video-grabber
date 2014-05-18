<?php

use VideoGrabber\TcmByGrabber;

class TcmByGrabberTest extends PHPUnit_Framework_TestCase {
    /**
     * @var VideoGrabber\TcmByGrabber
     */
    private $subject;

    public function setUp() {
        $this->subject = new TcmByGrabber();
    }

    public function testSanity() {
        $this->assertTrue(true);
    }
}
