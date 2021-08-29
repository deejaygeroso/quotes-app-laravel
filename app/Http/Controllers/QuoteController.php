<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index() {
        return Quote::all();
    }

    public function show($id) {
        return Quote::find($id);
    }

    public function store(Request $request) {
        return Quote::create($request->all);
    }

    public function update(Request $request, $id) {
        $quote = Quote::findOrFail($id);
        $quote->update($request->all);
        return $quote;
    }

    public function delete(Request $request, $id) {
        Quote::find($id)->delete();
        return 204;
    }
}
