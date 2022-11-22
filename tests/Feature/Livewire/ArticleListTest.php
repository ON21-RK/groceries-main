<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ArticleList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ArticleListTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ArticleList::class);

        $component->assertStatus(200);
    }
}
