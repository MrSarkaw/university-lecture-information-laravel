@extends('layouts.admin')

@section('content')
<div class="container card">
    <form action="{{ isset($data)? route('admin.users.update', ['user' => $data->id]) : route('admin.users.store') }}" method="POST">
        @csrf
        @if (isset($data))
            @method('PUT')
        @endif
        <div class="row p-2">
            <div class="col-4">
                <p>ئیمەیل</p>
                <input value="{{ isset($data)? $data->email : old('email') }}" class="form-control" type="email" name="email" id="">
            </div>
            <div class="col-4">
                <p>تێپەڕوشە</p>
                <input class="form-control" type="password" name="password" id="">
            </div>
            <div class="col-4">
                <p>دووبارەکردنەوەی تێپەڕوشە</p>
                <input  class="form-control" type="password" name="password_confirmation" id="">
            </div>
        </div>
        <button class="btn btn-success m-3">
            {{ isset($data)? 'تازەکردنەوە' :'زیادکردن' }}
        </button>
    </form>
</div>
@endsection
