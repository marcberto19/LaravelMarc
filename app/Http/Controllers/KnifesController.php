<?php

namespace App\Http\Controllers;

use App\Models\Knifes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KnifesController extends Controller
{
    public function index(): View {
        $knifes = Knifes::all();
        return view('knifes.index', compact('knifes'));
    }

    public function create(): View {
        return view('knifes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
            'tipus' => 'required',
            'float' => 'required',
            'lock' => 'required',
            'preu' => 'required',
        ]);

        Knifes::create($request->all());

        return redirect()->route('knifes.index');
    }

    public function edit(Knifes $knifes): View {
        return view('knifes.edit', compact('knifes'));
    }

    public function update(Request $request, Knifes $knifes): RedirectResponse {
        $request->validate([
            'nom' => 'required',
            'tipus' => 'required',
            'float' => 'required',
            'lock' => 'required',
            'preu' => 'required',
        ]);

        $knifes->update($request->all());

        return redirect()->route('knifes.index');
    }

    public function delete(Knifes $knifes): View {
        return view('knifes.delete', compact('knifes'));
    }

    public function destroy(Knifes $knifes): RedirectResponse {
        $knifes->delete();
        return redirect()->route('knifes.index');
    }

    public function show(Knifes $knifes): View {
        return view('knifes.show', compact('knifes'));
    }
}
