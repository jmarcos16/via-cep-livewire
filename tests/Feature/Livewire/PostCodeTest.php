<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PostCode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PostCodeTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(PostCode::class)
            ->assertStatus(200);
    }
}
