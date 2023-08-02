<?php

namespace Tests\Feature\Livewire;

use App\Livewire\SearchAddress;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SearchAddressTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(SearchAddress::class)
            ->assertStatus(200);
    }
}
