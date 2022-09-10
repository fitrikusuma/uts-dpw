@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                       Detail Data Artikel
                    </div>
                    <div class="card-body">
                       <h3 class="text-center"> {{$artikel->judul}}</h3>
                       <hr>
                       <p>
                            Penulis : {{$artikel->penulis}} |
                            Tanggal : {{$artikel->tanggal}} |
                       </p>
                       <p>
                            {!! nl2br($artikel->deskripsi) !!}
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection