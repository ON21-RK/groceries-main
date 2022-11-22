<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ArticleListItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ArticleListItemTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ArticleListItem::class);

        $component->assertStatus(200);
    }
}
