<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

use App\Models\Product;

use Validator;
use File;
use Log;
use DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request, [
            'name'=> 'required|min:2|max:50',
            'category'=> 'required',
            'scientific_name'=> 'required|min:2|max:50',
            'quantity'=> 'required',
            'lifespan'=> 'required',
            'price'=> 'required',
            'description'=> 'required|min:2',
            'images.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ],[
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 2 characters',
            'name.max' => 'Name must be less than 50 characters',
            'category.required' => 'Category is required',
            'scientific_name.required' => 'Scientific Name is required',
            'scientific_name.min' => 'Scientific Name must be at least 2 characters',
            'scientific_name.max' => 'Scientific Name must be less than 50 characters',
            'quantity.required' => 'Quantity is required',
            'lifespan.required' => 'Lifespan is required',
            'price.required' => 'Price is required',
            'description.required' => 'Description is required',
            'description.min' => 'Description must be at least 2 characters',
            'images.*.image' => 'Image must be an image',
            'images.*.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg.',
            'images.*.max' => 'Image must be less than 4MB',
        ]);

        try {
            DB::beginTransaction();
            $imagePaths = [];

            foreach ($validator['images'] as $image) {
                $photo = uniqid() . '.webp';
                $destinationPath = 'uploads/products';
    
                $imgFile = Image::make($image);
                $imgFile->encode('webp', 80)->save($destinationPath . '/' . $photo);
    
                $imagePaths[] = $photo;
            }
    
            $imagesString = implode(', ', $imagePaths);
    
            Product::create([
                'name' => $validator['name'],
                'category' => $validator['category'],
                'scientific_name' => $validator['scientific_name'],
                'quantity' => $validator['quantity'],
                'price' => $validator['price'],
                'lifespan' => $validator['lifespan'],
                'description' => $validator['description'],
                'image' => $imagesString,
            ]);

            DB::commit();

        } catch (\Exception $e) {
            Log::error($e);
            DB::rollback();

            return redirect()
            ->back()
            ->with('flash_error', 'Error creating Product.')
            ->withInput();
        }

        return redirect()->route('admin.products.index')->with('flash_success', 'Product created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('pages.admin.products.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.admin.products.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'name'=> 'required|min:2|max:50',
            'category'=> 'required',
            'scientific_name'=> 'required|min:2|max:50',
            'quantity'=> 'required',
            'price'=> 'required',
            'description'=> 'required|min:2',
            'images.*'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ],[
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 2 characters',
            'name.max' => 'Name must be less than 50 characters',
            'category.required' => 'Category is required',
            'scientific_name.required' => 'Scientific Name is required',
            'scientific_name.min' => 'Scientific Name must be at least 2 characters',
            'scientific_name.max' => 'Scientific Name must be less than 50 characters',
            'quantity.required' => 'Quantity is required',
            'price.required' => 'Price is required',
            'description.required' => 'Description is required',
            'description.min' => 'Description must be at least 2 characters',
            'images.*.image' => 'Image must be an image',
            'images.*.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg.',
            'images.*.max' => 'Image must be less than 4MB',
        ]);

        try{
            DB::beginTransaction();

            $product = Product::find($id);

            if($request->hasFile('image')) {
                $imagePaths = [];

            foreach ($validator['images'] as $image) {
                $photo = uniqid() . '.webp';
                $destinationPath = 'uploads/products';
    
                $imgFile = Image::make($image);
                $imgFile->encode('webp', 80)->save($destinationPath . '/' . $photo);
    
                $imagePaths[] = $photo;
            }
    
            $imagesString = implode(', ', $imagePaths);

            $product->image = $imagesString;
            }

            $product->name = $validator['name'];
            $product->category = $validator['category'];
            $product->scientific_name = $validator['scientific_name'];
            $product->quantity = $validator['quantity'];
            $product->price = $validator['price'];
            $product->description = $validator['description'];

            $product->save();

            DB::commit();
        }catch (\Exception $e) {
            Log::error($e);
            DB::rollback();

            return redirect()
            ->back()
            ->with('flash_error', 'Error updating Product.')
            ->withInput();
        }

        return redirect()->route('admin.products.index')->with('flash_success', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         try{
            DB::beginTransaction();

            $product = Product::find($id);
            $product->delete();

            DB::commit();
        }catch (\Exception $e) {
            Log::error($e);
            DB::rollback();

            return redirect()
            ->back()
            ->with('flash_error', 'Error deleting Product.')
            ->withInput();
        }
    }
}
