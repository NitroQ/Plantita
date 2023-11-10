<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transactions;
use App\Models\TransactionProducts;
use DB;
use log;

class AdminController extends Controller
{
    public function index(Request $req)
    {
        $totalProducts = Product::count();
        $countActiveProducts = Product::where('status', 'active')->count();
        $countLowQuantity = Product::where('quantity', '<=', 5)->count();
        $totalPendingTransactions = Transactions::where('status', 'pending')->count();
        $totalQuantityInTransactions = TransactionProducts::sum('quantity');
        
        $bestSellingProducts = TransactionProducts::select('product_id', DB::raw('SUM(quantity) as total_sold'))
            ->groupBy('product_id')
            ->orderByDesc('total_sold')
            ->limit(5)
            ->get();

        $bestSellingProductsDetails = [];
        foreach ($bestSellingProducts as $bestSellingProduct) {
            $product = Product::find($bestSellingProduct->product_id);
            $bestSellingProductsDetails[] = [
                'product' => $product,
                'total_sold' => $bestSellingProduct->total_sold,
            ];
        }

        $totalIncome = Transactions::sum('total'); 
        $latestTransactionDate = Transactions::max('created_at'); 

        $transactionsData = Transactions::select('total', 'created_at')
        ->orderBy('created_at')
        ->get();

        $months = $transactionsData->pluck('created_at')->unique()->map(function ($date) {
            return \Carbon\Carbon::parse($date)->format('M');
        })->values();    
        
        $pendingTransactions = Transactions::where('status', 'pending')
        ->select('id', 'name', 'total')
        ->get();

        return view('pages.admin.dashboard', compact(
            'totalProducts',
            'countActiveProducts',
            'countLowQuantity',
            'totalPendingTransactions',
            'totalQuantityInTransactions',
            'bestSellingProductsDetails',
            'totalIncome',
            'latestTransactionDate',
            'transactionsData',
            'months',
            'pendingTransactions'
        ));
    }

}
