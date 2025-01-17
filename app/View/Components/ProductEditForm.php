<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductEditForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.product-edit-form');
    }
}
