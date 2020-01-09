@extends('template.main')
@section('title','Daftar Buku')
@section('container')
   
    <div class="container mt-3">
        <div class="row">
            <div class="col-md">
        
                    <form action="/buku/edit/{{$books->id}}" method="post">
                    @method('patch')
                    @csrf
                    <h2>Form Ubah Data Buku</h2>
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" aria-describedby="emailHelp" placeholder="Book Title" name="judul" value="{{$books->judul}}">
                            @error('judul')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Pengarang">Pengarang</label>
                            <input type="text" class="form-control" id="Pengarang" placeholder="Pengarang" name="pengarang" value="{{$books->pengarang}}">
                        </div>
                        <div class="form-group">
                            <label for="Penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="Penerbit" placeholder="Penerbit" name="penerbit" value="{{$books->penerbit}}">
                        </div>
                        <div class="form-group">
                            <label for="Halaman">Jumlah Halaman</label>
                            <input type="text" class="form-control" id="Halaman" placeholder="Halaman" name="halaman" value="{{$books->halaman}}">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>

            </div>
        </div>
    </div>
@endsection