<?php

namespace App\Http\Controllers;

use App\Model\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = BookModel::all();
        return view('shop1', compact('books'));
    }

    public function cart(Request $request)
    {
        $id1 = $request->session()->get('cart');

        $books = [];
        foreach ($id1 as $key => $item) {
            $books[] = BookModel::where('id_book', $item)->get();
        }

        return view('cart', ['books' => $books, 'id' => $id1]);
    }

    public function addNewCart(Request $request, $id)
    {
        $request->session()->push('cart', $id);

        return redirect(route('index'));
    }

    public function delete(Request $request, $id)
    {
        $cartInformation = $request->session()->get('cart');
        if (empty($cartInformation)) {
            $cartInformation = [];
        }

        foreach ($cartInformation as $key => $cart) {
            if ($cart === $id) {
                    unset($cartInformation[$key]);
            }
        }

        $request->session()->put('cart', $cartInformation);

        return redirect(route('cart'));
        }
    }
