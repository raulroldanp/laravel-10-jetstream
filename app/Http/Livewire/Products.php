<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{

    public $products, $description, $amount, $id_product;
    public $modal = false;

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products');
    }

    public function create() {
        $this->cleanInputs();
        $this->openModal();
    }

    public function openModal() {
        $this->modal = true;
    }

    public function closeModal() {
        $this->modal = false;
    }

    public function cleanInputs() {
        $this->description = '';
        $this->amount = '';
        $this->id_product = '';
    }

    public function save() {}

    public function edit($id_product) {}

    public function delete($id_product) {}
}
