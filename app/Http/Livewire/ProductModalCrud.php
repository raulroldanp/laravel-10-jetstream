<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Product;

class ProductModalCrud extends Component
{
    use WithPagination;

    public $productId, $product;
    public $showModal = false;

    protected $rules = [
        'product.name' => 'required',
        'product.price' => 'required|numeric'
    ];

    public function render()
    {
        return view('livewire.product-modal-crud', [
            'products' => Product::latest()->paginate(5)
        ]);
    }

    public function openModal() {
        $this->showModal = true;
    }

    public function closeModal() {
        $this->showModal = false;
    }

    public function cleanInputs() {
        $this->productId = null;
        $this->product = null;
    }

    public function create() {
        $this->cleanInputs();
        $this->openModal();        
    }

    public function edit($id) {
        $this->product = Product::findOrFail($id);
        $this->productId = $id;      
        $this->openModal();  
    }

    public function save() {
        $this->validate();

        Product::updateOrCreate(['id' => $this->productId], [
            'name' => $this->product['name'],
            'description' => $this->product['name'],
            'amount' => 0,
            'price' => $this->product['price']
        ]);

        $this->closeModal();
        $this->cleanInputs();
    }

    public function delete($id) {
        $product = Product::find($id)->delete();
    }
}
