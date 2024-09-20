<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suggest;
use Illuminate\Http\Request;

class SuggestController extends Controller
{
    public function index() {
        return view('admin.suggest.index', [
            'suggest' => Suggest::get(),
        ]);
    }

    public function show(string $id)
    {
        $suggest = Suggest::findOrFail($id);
        return view('admin.suggest.detail', compact('suggest'));
    }
}
