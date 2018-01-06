@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{isset($user) ? url('users') . '/' . $user->id : url('users')}}"method="POST">
                <div class="form-group">
                    {{csrf_field()}}
                    @if(isset($user))
                         {{method_field('PUT')}}
                    @endif            
                    <input type="text" name="nama" placeholder="Nama" class="form-control"
                    value="{{isset($user) ? $user->name :''}}">
                    <input type="email" name="email" placeholder="Email" class="form-control"
                    value="{{isset($user) ? $user->email :''}}">
                    <button type="submit" class="btn btn-sm btn-success">confirm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
