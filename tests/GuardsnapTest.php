<?php
/**
 * Tests for GuardSnap
 */

use PHPUnit\Framework\TestCase;
use Guardsnap\Guardsnap;

class GuardsnapTest extends TestCase {
    private Guardsnap $instance;

    protected function setUp(): void {
        $this->instance = new Guardsnap(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Guardsnap::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
