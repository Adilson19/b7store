<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilteredAdvertises extends Component
{
    public $advertisesList;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->advertisesList = [
            [
                'image' => 'http://placehold.it/140x140', 'title' => 'Bola de Futebol Americano Wilson', 'price' => 'R$ 138,61',
                'title' => 'Tenis vans Babuy - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/140x140', 'title' => 'Bola de Futebol Americano Wilson', 'price' => 'R$ 138,61',
                'title' => 'Tenis vans Babuy - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/140x140', 'title' => 'Bola de Futebol Americano Wilson', 'price' => 'R$ 138,61',
                'title' => 'Tenis vans Babuy - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/140x140', 'title' => 'Bola de Futebol Americano Wilson', 'price' => 'R$ 138,61',
                'title' => 'Tenis vans Babuy - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/140x140', 'title' => 'Bola de Futebol Americano Wilson', 'price' => 'R$ 138,61',
                'title' => 'Tenis vans Babuy - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/140x140', 'title' => 'Bola de Futebol Americano Wilson', 'price' => 'R$ 138,61',
                'title' => 'Tenis vans Babuy - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filtered-advertises');
    }
}
