<?php

namespace App\Http\Controllers;

use App\Models\Biografi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Biografi::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'namatokoh' => 'required',
            'foto'      => 'required|image|mimes:jpg,jpeg,png',
            'orientasi' => 'required',
            'peristiwapenting' => 'required',
            'riorientasi'      => 'required'
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/posts', $image->hashName());

        Biografi::create([
            'namatokoh'          => $request->namatokoh,
            'foto'               => $image->hashName(),
            'orientasi'          => $request->orientasi,
            'peristiwapenting'   => $request->peristiwapenting,
            'riorientasi'        => $request->riorientasi
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View{
        $post = Biografi::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit(string $id): View{
        $post = Biografi::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'namatokoh'         => 'required',
            'foto'              => 'image|mimes:jpg,jpeg,png',
            'orientasi'         => 'required',
            'peristiwapenting'  => 'required',
            'riorientasi'       => 'required'
        ]);

        $post = Biografi::findOrFail($id);

        if ($request->hasFile('foto')) {

            $image = $request->file('foto');
            $image->storeAs('public/posts', $image->hashName());

            Storage::delete('public/posts/'.$post->image);

            $post->update([
                'namatokoh'          => $request->namatokoh,
                'foto'               => $image->hashName(),
                'orientasi'          => $request->orientasi,
                'peristiwapenting'   => $request->peristiwapenting,
                'riorientasi'        => $request->riorientasi
            ]);
        } else {
            $post->update([
                'namatokoh'          => $request->namatokoh,
                'orientasi'          => $request->orientasi,
                'peristiwapenting'   => $request->peristiwapenting,
                'riorientasi'        => $request->riorientasi
            ]);
        }

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse{
        $post = Biografi::findOrFail($id);
        Storage::delete('public/posts/.'. $post->image);
        $post->delete();
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}