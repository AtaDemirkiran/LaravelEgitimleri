<?php

namespace App\Http\Controllers;

use App\Models\Adres;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public function index()
    {
        $users = User::simplePaginate(4);

        $all = request('all');

        if ($all == 'hepsi') {

            $all_user = User::all();
            $value = count($all_user);
            $users = User::simplePaginate($value);
        }
        if ($all == 'gizle') {
            $users = User::simplePaginate(4);
        }

        return view('deneme', compact('users'));
    }

    public function user_ekle()
    {

        $this->validate(request(), [
            'name' => 'required|min:3|max:10',
            'surname' => 'required|min:3|max:10'
        ]);

        $new_user = User::create([
            'name' => request('name'),
            'surname' => request('surname')
        ]);

        return redirect('deneme');
    }

    public function ekle()
    {


        $comment_ekle = Comment::insert([
            'yorum' => request('yorum'),
            'user_id' => 2
        ]);
        if ($comment_ekle) {
            return   redirect('deneme');
        }
    }

    public function delete($id)
    {

        $data = User::find($id);
        $data->delete();

        if ($data) {
            return redirect('/deneme');
        }
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('deneme-detay', compact('user'));
    }

    public function uyeAra()
    {
        $aranan = request()->input('aranan');
        $users = User::where('name', 'like', "%$aranan%")
            ->orWhere('surname', 'like', "%$aranan%")
            ->simplePaginate(4);



        return view('aramaview', compact('users'));
    }


    public function update($id)
    {

        $user = User::find($id);
        $user->name = request('name');
        $user->surname = request('surname');




        if ($user->save()) {
            return redirect('deneme');
        }
    }
}
