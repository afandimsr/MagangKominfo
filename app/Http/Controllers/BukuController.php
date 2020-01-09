<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "Hallo world";
        $books = Book::all();
        // dump($books);
        return view('buku', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $book = new Book;
        // $book->judul = $request->judul;
        // $book->pengarang = $request->pengarang;
        // $book->penerbit = $request->penerbit;
        // $book->halaman = $request->halaman;
        // $book->status = "1";
        // $book->save();
        $validatedData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit'=>'required',
            'halaman'=>'required'
        ]);
        Book::create([
            'judul'=> $request->judul,
            'pengarang'=> $request->pengarang,
            'penerbit'=> $request->penerbit,
            'halaman'=>$request->halaman,
            'status'=> "1"
        ]);
        return redirect('/buku')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::find($id);
        return view('ubahBuku',compact('books'));
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $books = Book::find($id);
        $books->judul = $request->judul;
        $books->pengarang = $request->pengarang;
        $books->penerbit = $request->penerbit;
        $books->halaman = $request->halaman;
        $books->save();
        return redirect('/buku')->with('status','Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
       
        $book = Book::find($book->id);
        $book->delete();
        return redirect('/buku')->with('status','Data Berhasil dihapus');

    }
}
