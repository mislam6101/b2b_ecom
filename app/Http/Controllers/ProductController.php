<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('seller_id', Auth::guard('seller')->id())->orderBy('id', 'desc')->get();

        return view('backend.product.index', compact('products'));
    }

    public function adminIndex()
    {
        $products = Product::with('seller')->orderBy('id', 'desc')->get();

        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $seller = Auth::guard('seller')->user();

        return view('backend.product.create', compact('seller'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate(
            [
                'prod_name'       => 'required|string|max:255',
                'prod_sku'        => 'required|string|max:255|unique:products,sku',
                'prod_price'      => 'required|numeric|min:0',
                'prod_dis_price'  => 'nullable|numeric|min:0',
                'prod_quantity'   => 'required|integer|min:0',
                'prod_moq'   => 'required|integer|min:1',
                'prod_details'    => 'nullable|string|max:200',
                'image'           => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'prod_name.required'     => 'Product name is required.',
                'prod_name.string'       => 'Product name must be a valid string.',
                'prod_name.max'          => 'Product name may not exceed 255 characters.',

                'prod_sku.required'      => 'Product SKU is required.',
                'prod_sku.string'        => 'Product SKU must be a valid string.',
                'prod_sku.unique'        => 'This SKU has already been taken.',

                'prod_moq.requied'   => 'Must Required moq',
                'prod_moq.requied'   => 'MOQ must be a number',
                'prod_moq.requied'   => 'MOQ must be at least 1',

                'prod_price.required'    => 'Product price is required.',
                'prod_price.numeric'     => 'Product price must be a number.',
                'prod_price.min'         => 'Product price must be at least 1.',

                'prod_dis_price.numeric' => 'Discount price must be a number.',
                'prod_dis_price.min'     => 'Discount price must be at least 0.',

                'prod_quantity.required' => 'Product quantity is required.',
                'prod_quantity.integer'  => 'Product quantity must be a number.',
                'prod_quantity.min'      => 'Product quantity must be at least 0.',

                'prod_details.max'       => 'Product description may not exceed 200 characters.',

                'image.image'            => 'The uploaded file must be an image.',
                'image.mimes'            => 'The image must be a file of type: jpeg, png, jpg, gif.',
                'image.max'              => 'The image size must not exceed 2MB.',
            ]
        );

        $data = [
            'name'         => $request->prod_name,
            'sku'          => $request->prod_sku,
            'seller_id' => Auth::guard('seller')->id(),
            'price'        => $request->prod_price,
            'discount_price' => $request->prod_dis_price,
            'quantity'     => $request->prod_quantity,
            'moq'     => $request->prod_moq,
            'description'  => $request->prod_details,
        ];

        // Image upload
        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/products', $filename);
            $data['image'] = $filename;
        }

        // Create Product
        Product::create($data);

        // Redirect with success message
        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        if ($product->seller_id !== Auth::guard('seller')->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Ensure seller can only update their own product
        if ($product->seller_id !== Auth::guard('seller')->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Validation
        $request->validate([
            'prod_name'       => 'required|string|max:255',
            'prod_sku'        => 'required|string|max:255|unique:products,sku,' . $product->id,
            'prod_price'      => 'required|numeric|min:0',
            'prod_dis_price'  => 'nullable|numeric|min:0',
            'prod_quantity'   => 'required|integer|min:0',
            'prod_moq'        => 'required|integer|min:1',
            'prod_details'    => 'nullable|string|max:200',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'name'          => $request->prod_name,
            'sku'           => $request->prod_sku,
            'price'         => $request->prod_price,
            'discount_price' => $request->prod_dis_price,
            'quantity'      => $request->prod_quantity,
            'moq'           => $request->prod_moq,
            'description'   => $request->prod_details,
        ];

        // Image upload
        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/products', $filename);
            $data['image'] = $filename;
        }

        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Ensure seller can only delete their own product
        if ($product->seller_id !== Auth::guard('seller')->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Delete product image
        // if ($product->image) {
        //     \Storage::delete('public/products/' . $product->image);
        // }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
    public function decreaseStock(Request $request)
    {
        $product = Product::find($request->id);
        if ($product->quantity > 0) {
            $product->decrement('quantity');
        }
        return response()->json(['quantity' => $product->quantity]);
    }

    public function increaseStock(Request $request)
    {
        $product = Product::find($request->id);
        $product->increment('quantity', $request->qty);
        return response()->json(['quantity' => $product->quantity]);
    }

    public function verify($id)
    {
        $product = Product::findOrFail($id);

        $product->status = 1;
        $product->save();

        return response()->json([
            'success' => true,
            'status' => 'Verified'
        ]);
    }
}
