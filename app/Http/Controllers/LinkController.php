<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function create()
    {
        return view('links.create');
    }

    public function store(CreateLinkRequest $request)
    {

        $user = auth()->user();

        $data = $request->validated();

        if ($file = $request->image) {
            $data['image'] = $file->store('images');
        }

        $user->links()->create($data);
        return to_route('dashboard')->with(['message' => 'Link criado com sucesso']);
    }
    public function edit(Link $link)
    {
        // dd($this->authorize('atualizar', $link));
        return view('links.edit', compact('link'));
    }

    public function update(UpdateLinkRequest $request, Link $link)
    {

        $data = $request->validated();
        if ($file = $request->image) {
            $data['image'] = $file->store('images');
        }
        $link->fill($data)->save();
        return to_route('dashboard')->with(['message' => 'Link atualizado com sucesso']);
    }
    public function destroy(Link $link)
    {
        $link->delete();
        return to_route('dashboard')->with(['message' => 'Link deletado com sucesso']);
    }

    public function up(Link $link)
    {
        $link->moveUp();
        return back();
    }
    public function down(Link $link)
    {
        $link->moveDown();
        return back();
    }
}
