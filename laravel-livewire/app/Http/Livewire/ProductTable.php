<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.product-table', [
            'products' => Product::where('name', 'like', '%' . $this->search . '%')->paginate(5)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}