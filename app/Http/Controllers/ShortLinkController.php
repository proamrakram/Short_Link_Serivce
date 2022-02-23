<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    public function short_link()
    {
        $data = ShortLink::all();
        return view('short_link', [
            'data' => $data
        ]);
    }

    public function add_url(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'url' => ['required', 'string']
        ]);

        $url = ShortLink::create([
            'name_website' => $request->name,
            'orginal_url' => $request->url
        ]);

        $url->update([
            'new_url' => "short" . $url->id
        ]);

        return redirect()->route('short_link');
    }

    public function open($id){

        $url = ShortLink::where('id',$id)->first();

        $url->update([
            'number_clicks' => $url->number_clicks + 1
        ]);

        return redirect($url->orginal_url);

    }

}
