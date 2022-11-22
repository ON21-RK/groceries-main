<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class MenuItem extends Component
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $link;

    /**
     * @var bool
     */
    protected bool $isMobile;

    /**
     * Create the component instance.
     *
     * @param string $name
     * @param string $link
     * @param bool $isMobile
     */
    public function __construct(string $name, string $link, bool $isMobile = false)
    {
        $this->name = $name;
        $this->link = $link;
        $this->isMobile = $isMobile;
    }

    public function isActive(): bool
    {
        return $this->link !== Request::url();
    }

    public function isMobile(): bool
    {
        return $this->isMobile;
    }

    public function render(): View
    {
        return view('components.menu-item');
    }
}
