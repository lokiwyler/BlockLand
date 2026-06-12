<?php
/**
 * Tests for BlockLand
 */

use PHPUnit\Framework\TestCase;
use Blockland\Blockland;

class BlocklandTest extends TestCase {
    private Blockland $instance;

    protected function setUp(): void {
        $this->instance = new Blockland(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockland::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
