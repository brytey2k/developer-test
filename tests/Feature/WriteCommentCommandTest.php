<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WriteCommentCommandTest extends TestCase
{

    use RefreshDatabase;

    public function testWriteCommentCommandCanWriteAComment(): void
    {
        $this->seed();

        $output = $this->artisan('app:write-comment');

        $output->expectsOutput('Comment written');
        $output->assertExitCode(0);
    }

}
