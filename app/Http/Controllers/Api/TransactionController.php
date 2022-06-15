<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Http\Resources\TransactionResource;


class TransactionController extends Controller
{


    public function index()
    {
        return TransactionResource::collection(
            Transaction::with('category')->get());
    }



   public function store(TransactionRequest $request)
    {
        $transaction = auth()->user()->transactions()->create($request->validated());

        return new TransactionResource($transaction);
    }



    public function show(Transaction $transaction)
    {
        return new TransactionResource($transaction);
    }



    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $transaction->update($request->validated());

        return new TransactionResource($transaction);
    }


 
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return response()->noContent();
    }
}
