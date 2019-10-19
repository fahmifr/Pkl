@extends('layouts.sidebarPenyewa')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Kesenian</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                    <thead >
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Kesenian</th>
                        <th scope="col">Jenis Kesenian</th>
                        <th scope="col">Tarif Sewa</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Deskripsi</th>
                        </tr>
                        </thead>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection