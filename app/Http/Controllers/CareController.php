<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Care;
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
    public function index()
    {
        $products = Product::where('category', '==', 'plant')->get();
        $care = Care::all();
        return view('pages.admin.plantcare.index',
        [
            'products' => $products,
            'care' => $care
        ]);
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
        $care = Care::firstWhere('product_id', $id);

        return view('pages.admin.plantcare.view', [
            'care' => $care,
            'id' => $id
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
        $care = Care::firstWhere('product_id', $id);

        return view('pages.admin.plantcare.edit', [
            'care' => $care,
            'id' => $id
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
            'care_level' => 'required',
            'care_description' => 'required',
            'watering_level' => 'required',
            'watering_description' => 'required',
            'sun_level' => 'required',
            'sun_description' => 'required',
        ],[
            'care_level.required' => 'Care Level is required',
            'care_description.required' => 'Care Description is required',
            'watering_level.required' => 'Watering Level is required',
            'watering_description.required' => 'Watering Description is required',
            'sun_level.required' => 'Sun Level is required',
            'sun_description.required' => 'Sun Description is required'
        ]);

        try{
            DB::beginTransaction();

            $care = Care::updateOrCreate(
                ['product_id' => $id],
                [
                    'care_level' => $validate['care_level'],
                    'care_description' => $validate['care_description'],
                    'watering_level' => $validate['watering_level'],
                    'watering_description' => $validate['watering_description'],
                    'sun_level' => $validate['sun_level'],
                    'sun_description' => $validate['sun_description'],
                ]
            );
        }catch(\Exception $e){
            Log::error($e);
            DB::rollback();

            return redirect()
            ->back()
            ->with('flash_error', 'Error updating Care.')
            ->withInput();
        }
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
