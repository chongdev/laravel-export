<?php

namespace App\Http\Controllers;

use App\Exports\TransactionsExport;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user')->simplePaginate(30);
        return view('home', compact('transactions'));
    }

    public function export()
    {
        return Excel::download(new TransactionsExport, 'transactions.csv');
    }
}
