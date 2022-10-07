<?php

namespace App\Http\Livewire;

use App\Models\product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddProduct extends Component
{
    use WithPagination;

    public $product = [];
    public $productU = [];
    public $imageName;

    use WithFileUploads;

    public function clear()
    {
        $this->product = [];
        $this->imageName = [];
    }

    public function register()
    {
        $this->validate(
            [
                'product.name' => 'required',
                'product.price' => 'required',
                'imageName' => 'required|mimes:png,jpg',
                'product.quantity' => 'required',
            ]
        );


        $imageName = 'image' . time() . $this->imageName->getClientOriginalName();
        $upload_image = $this->imageName->storeAs('public/product_images', $imageName);
        $data = array(
            "name" => $this->product['name'],
            "price" => $this->product['price'],
            "quantity" => $this->product['quantity'],
            "image" => $imageName,
            "status" => 1
        );

        product::insert($data);
        $this->dispatchBrowserEvent('success', ['message' => 'le produit a ete ajouté']);
        $this->product = [];
        $this->imageName = "";
    }

    public function updateTo($id)
    {
        $this->productU = product::findOrFail($id)->toArray();
        $this->dispatchBrowserEvent('modal', ['message' => 'le produit a ete ajouté']);
    }


    public function update()
    {
        $this->validate(
            [
                'product.name' => 'required',
                'product.price' => 'required',
                'imageName' => 'required|mimes:png,jpg',
                'product.quantity' => 'required',
            ]
        );

        $imageNames = 'image' . time() . $this->imageName->getClientOriginalName();
        $upload_image = $this->imageName->storeAs('public/product_images', $imageNames);
        $data = array(
            "name'" => $this->productU['name'],
            "price" => $this->productU['price'],
            "quantity" => $this->productU['quantity'],
            "image" => $imageNames,
        );

        if (product::find($this->productU['id'])->update($data)) {
            $this->dispatchBrowserEvent('success', ['message' => 'le produit a ete mise a jour']);
        }
    }

    public function delete($id)
    {
        product::destroy($id);
        $this->dispatchBrowserEvent('error', ['message' => 'le produit a ete mise a jour']);
    }





    public function render()
    {
        return view('livewire.add-product', [
            'products' => product::paginate(10)
        ]);
    }
}
