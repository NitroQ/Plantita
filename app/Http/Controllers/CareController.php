<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Validator;
use Log;
use DB;

class CareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $products = Product::query();

        if ($req->has('search')) {
            $search = $req->search;
            $s = '%'.$search.'%';

            $products->where('name', 'LIKE', $s)
                ->orWhere('id', 'LIKE', $s);
        }

        $products = $products->get();

        return view('pages.admin.plantcare.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        return view('pages.admin.plantcare.view', [
            'product' => $product,
        ]);
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

        return view('pages.admin.plantcare.edit', [
            'product' => $product,
        ]);
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
        $validate = $this->validate($request,[
            'care_level' => 'not_in:Choose Care Level',
            'care_description' => 'required',
            'watering_level' => 'not_in:Choose Watering Level',
            'watering_description' => 'required',
            'sun_level' => 'not_in:Choose Sunlight Level',
            'sun_description' => 'required',
        ],[
            'care_level.not_in' => 'Care Level is required',
            'care_description.required' => 'Care Description is required',
            'watering_level.not_in' => 'Watering Level is required',
            'watering_description.required' => 'Watering Description is required',
            'sun_level.not_in' => 'Sun Level is required',
            'sun_description.required' => 'Sun Description is required'
        ]);

        try{
            DB::beginTransaction();

            $care = Product::find($id);

            $care->care_level = $validate['care_level'];
            $care->care_description = $validate['care_description'];
            $care->watering_level = $validate['watering_level'];
            $care->watering_description = $validate['watering_description'];
            $care->sun_level = $validate['sun_level'];
            $care->sun_description = $validate['sun_description'];

            $care->save();

            DB::commit();

        }catch(\Exception $e){
            Log::error($e);
            DB::rollback();

            return redirect()
            ->back()
            ->with('flash_error', 'Error updating Care.')
            ->withInput();
        }
        
        return redirect()->route('admin.plantcare.index')->with('flash_success', 'Plant Care updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
