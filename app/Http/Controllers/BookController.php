<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function list(Request $rq){
        $book=Books::with('Author')->paginate(20);
//       dd( $book);
        $search=$rq->get('search');
        if($search!=null){

        }
        return view('home',compact('book'));
    }
    public function searchBook(Request $rq){
        $search=$rq->get('search');
        $book=Books::with('Author')->Search($search)->paginate();

        if($book && is_array($book)){
            dd( $book);

            return redirect()->route('book',compact('book'));
        }
        return redirect()->route('book')->with('err_search','Book not found');
    }
}
