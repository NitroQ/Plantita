<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;
use App\Models\Product;
use DB;
use Log;

class LikeController extends Controller
{
    public function viewLikes() {
        $like = Likes::where('user_id', '=', auth()->user()->id)->get();
        $products = Product::whereIn('id', $like->pluck('product_id'))->get();

        return view('pages.user.likes', compact('products'));
    }

    public function addLike(Request $r) {
        try {
            DB::beginTransaction();
         
            $checkexisting = Likes::where('user_id', '=', auth()->user()->id)->where('product_id', '=', $r->id)->first();

            if ($checkexisting) {
                return response()->json(['message' => 'Item already in likes']);
            }else{
                Likes::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $r->id
                ]);
            }
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollback();

            return response()->json(['message' => 'Failed to add item to likes']);
        }
        return response()->json(['message' => 'Item added to likes successfully']);
    }
    
    public function removeLike($id) {
        try{
            DB::beginTransaction();

            $like = Likes::where('user_id', '=', auth()->user()->id)->where('like_id', '=', $id);
            $like->delete();

            DB::commit();
        }catch (\Exception $e) {
            Log::error($e);
            DB::rollback();

            return response()->json(['message' => 'Failed to remove item from likes']);
        }
        return response()->json(['message' => 'Successfully removed item from likes']);
    }
}
