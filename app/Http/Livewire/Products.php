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

    public function create() {
        $this->cleanInputs();
        $this->openModal();
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        $this->id_product = $id;
        $this->description = $product->description;
        $this->amount = $product->amount;
        $this->openModal();
    }

    public function save() {
        Product::updateOrCreate(['id' => $this->id_product], [
            'description' => $this->description,
            'amount' => $this->amount
        ]);

        $this->closeModal();
        $this->cleanInputs();
    }

    public function delete($id) {
        $product = Product::find($id)->delete();
    }
}
