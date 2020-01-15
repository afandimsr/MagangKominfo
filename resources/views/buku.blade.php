@extends('template.main')
@section('title','Daftar Buku')
@section('container')
   
    <div class="container mt-3">
        <div class="row">
            <div class="col-md">
            <h1>Daftar Buku</h1> <button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#exampleModalCenter" id="tambah"> Add Book</button>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            @endif
                <table class=" table table-responsive table-light">
                    <thead class="tableColor">
                       <tr>
                            <th scope="col">No</th>
                            <th>Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Jumlah Halaman</th>
                            <th scope="col">Status </th>
                            <th scope="col">Aksi</th>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$book->judul}}</td>
                            <td>{{$book->pengarang}}</td>
                            <td>{{$book->penerbit}}</td>
                            <td>{{$book->halaman}}</td>
                            <td><?php if($book->status ==1){
                                echo "Tersedia";
                            }else{
                                echo"Tidak Tersedia";
                            } ?></td>
                            <td>
                            <a href="/buku/{{$book->id}}/edit" class="badge badge-success" >Edit</a>
                            <form action="/buku/{{$book->id}}" method="post">
                            @method('delete')
                            @csrf
                             <button type="submit" class="badge badge-danger" onclick="return confirm('Yakin ingin hapus ?')">Delete</buuton></form></td>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Form Tambah Data Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/buku" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" aria-describedby="emailHelp" placeholder="Book Title" name="judul" value="{{old('judul')}}">
                            @error('judul')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Pengarang">Pengarang</label>
                            <input type="text" class="form-control" id="Pengarang" placeholder="Pengarang" name="pengarang" value="{{old('pengarang')}}">
                        </div>
                        <div class="form-group">
                            <label for="Penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="Penerbit" placeholder="Penerbit" name="penerbit" value="{{old('penerbit')}}">
                        </div>
                        <div class="form-group">
                            <label for="Halaman">Jumlah Halaman</label>
                            <input type="text" class="form-control" id="Halaman" placeholder="Halaman" name="halaman" value="{{old('halaman')}}">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                    </div>
                   
                    </div>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
@endsection