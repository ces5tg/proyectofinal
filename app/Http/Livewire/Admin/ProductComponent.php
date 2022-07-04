<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ProductComponent extends Component
{
    use WithFileUploads;
    public $hola = "asfd";
    public $categories = [];
    public $image;
    /* atributo especial , protected  */
    protected $rules = [
        'productCreate.name' => 'required',
        'productCreate.slug' => 'required',
        'productCreate.description' => 'required',
        'productCreate.short_description' => 'required',
        'productCreate.price_cost' => 'required',
        'productCreate.quantity' => 'required',
        'productCreate.status' => 'required',
        'productCreate.color' => 'required',
        'productCreate.size' => 'required',
        'productCreate.promotion' => '',
        'productCreate.price_desc' => 'required',
        'productCreate.image' => 'required',
        'productCreate.category_id' => 'required',

    ];
    protected $validationAttributes = [
        'productCreate.name' => 'nombre',
        'productCreate.slug' => 'slug',
        'productCreate.description' => 'detalle',
        'productCreate.short_description' => 'descripcion',
        'productCreate.price_cost' => 'precio',
        'productCreate.quantity' => 'cantidad',
        'productCreate.status' => 'status',
        'productCreate.color' => 'color',
        'productCreate.size' => 'tamaño',
        'productCreate.promotion' => '',
        'productCreate.price_desc' => 'price/descuento',
        'productCreate.image' => 'imagen',
        'productCreate.category_id' => 'category',

    ];
    public $productCreate = [
        'name' => null,
        'slug' => null,
        'description' => null,
        'short_description' => null,
        'price_cost' => null,
        'quantity' => null,
        'status' => null,
        'color' => null,
        'size' => null,
        'promotion' => null,
        'price_desc' => null,
        'image' => null,
        'category_id' => null

    ];
    public function mount(Product $product)
    {
        $this->product = $product;
        $this->categories = Category::all();
    }
    /* updated */
    public function updatedProductCreateName($value)
    {
        $this->productCreate['slug'] =  Str::slug($value);
    }

    public function save()
    {
        /* $this->hola= $this->productCreate['category_id']; */
        $this->validate();
        $image = $this->productCreate['image']->store('products');/* products/img.jpg */

        $product = new Product();
        $product->name = $this->productCreate['name'];
        $product->slug = $this->productCreate['slug'];
        $product->description = $this->productCreate['description'];
        $product->short_description = $this->productCreate['short_description'];
        $product->price_cost = $this->productCreate['price_cost'];
        $product->quantity = $this->productCreate['quantity'];
        $product->status = $this->productCreate['status'];
        $product->color = $this->productCreate['color'];
        $product->size = $this->productCreate['size'];
        $product->promotion = $this->productCreate['promotion'];
        $product->price_desc = $this->productCreate['price_desc'];
        $product->image = $image;
        $product->category_id = $this->productCreate['category_id'];
        $product->save();
       /*  dd($product); */
        return redirect()->route('admin.products.index');
    }
    public function render()
    {
        return view('livewire.admin.product-component');
    }
}
