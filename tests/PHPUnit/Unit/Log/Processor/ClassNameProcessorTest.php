<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Tests\Unit\Log\Processor;

use Piwik\Log\Processor\ClassNameProcessor;

/**
 * @group Core
 * @group Log
 * @covers \Piwik\Log\Processor\ClassNameProcessor
 */
class ClassNameProcessorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_append_classname_to_extra()
    {
        $processor = new ClassNameProcessor();

        $result = $processor(array(
            'extra' => array(
                'foo' => 'bar',
            ),
        ));

        $expected = array(
            'extra' => array(
                'foo' => 'bar',
                'class' => __CLASS__,
            ),
        );

        $this->assertEquals($expected, $result);
    }
}
