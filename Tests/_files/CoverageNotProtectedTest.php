<?php
class CoverageNotProtectedTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers CoveredClass::<!protected>
     */
    public function testPublicMethod()
    {
        $o = new CoveredClass;
        $o->publicMethod();
    }
}