<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;
use DB;
use Log;

class LikeController extends Controller
{
    public function viewLikes() {
        $like = Likes::where('user_id', '=', auth()->user()->id);
        $product = Product::whereIn('id', $like)->get();

        return view('pages.admin.products.view', compact('product'));
    }

    public function addLike(Request $r) {
        try {
            DB::beginTransaction();
            Likes::create([
                'user_id' => auth()->user()->id,
                'product_id' => $r->id
            ]);
            DB::commit();

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
