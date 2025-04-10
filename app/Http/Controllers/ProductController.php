<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::latest()->get();
        return view('product.index', compact('product'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        // membuat validasi
        // $validated = $request->validate([
        //     'nama_product'    => 'required',
        //     'price'           => 'required|numeric',
        //     'photo'           => 'required|mimes:png,jpg|max:1024',
        //     'stock'           => 'required|numeric',
        //     'production_date' => 'required',
        //     'merk'            => 'required',
        // ]);

        $product                  = new Product();
        $product->nama_product    = $request->nama_product;
        $product->merk            = $request->merk;
        $product->production_date = $request->production_date;
        $product->price           = $request->price;
        $product->stock           = $request->stock;

        // upload gambar atau foto
        if($request->hasFile('photo')){
            $img = $request->file('photo');
            $name = rand(1000,9999).$img->getClientOriginalName();
            $img->move('storage/product', $name);
            $product->photo = $name;
        }

        $product->save();

        return redirect()->route('product.index')->with('success', 'Data successfully saved');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // // membuat validasi
        // $validated = $request->validate([
        //     'nama_product'    => 'required',
        //     'price'           => 'required|numeric',
        //     'photo'           => 'nullable|mimes:png,jpg|max:1024',
        //     'stock'           => 'required|numeric',
        //     'production_date' => 'required',
        //     'merk'            => 'required',
        // ]);

        $product                  = Product::findOrFail($id);
        $product->nama_product    = $request->nama_product;
        $product->merk            = $request->merk;
        $product->production_date = $request->production_date;
        $product->price           = $request->price;
        $product->stock           = $request->stock;

        // update gambar atau foto
        if ($request->hasFile('photo')) {
        $product->deleteImage();
        $img  = $request->file('photo');
        $name = rand(1000, 9999) . $img->getClientOriginalName();
        $img->move('storage/product', $name);
        $product->photo = $name;
}

        $product->save();

        return redirect()->route('product.index')->with('success', 'Data successfully edited');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // hapus foto di storage
        if ($product->photo && \Storage::exists('public/product/' . $product->photo)) {
            Storage::delete('public/product/' . $product->photo);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Data successfully deleted');
    }
}