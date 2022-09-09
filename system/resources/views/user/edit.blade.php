@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Edit Data User
            </div>
            <div class="card-body">
                <form action="{{ url('admin/user', $user->id) }}"method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="nama" class="form-control" name="nama"value="{{ $user->nama }}">
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="username" class="form-control" name="username"value="{{ $user->username }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email"value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">No Handphone</label>
                                <input type="text" class="form-control" name="no_handphone">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
