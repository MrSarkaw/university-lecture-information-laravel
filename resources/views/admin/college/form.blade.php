@extends('layouts.admin')

@section('content')
<div class="container card">
    <form enctype="multipart/form-data" action="{{ isset($data)? route('admin.colleges.update', ['college' => $data->id]) : route('admin.colleges.store') }}" method="POST">
        @csrf
        @if (isset($data))
            @method('PUT')
        @endif
        <div class="row p-2">
            <div class="col-4">
                <p>ناو</p>
                <input value="{{ isset($data)? $data->name : old('name') }}" class="form-control" type="text" name="name" id="">
            </div>
            <div class="col-4">
                <p>جۆر</p>
                <select name="type" class="form-control" id="">
                    <option value=""></option>
                    <option {{ isset($data)? ($data->type == 0? 'selected' :'') : old('type') }} value="0">پەیمانگا</option>
                    <option {{ isset($data)? ($data->type == 1? 'selected' :'') : old('type') }} value="1">کۆلێج</option>
                </select>
            </div>
            <div class="col-4">
                <p>وێنە</p>
                <input  class="form-control" type="file" name="img" id="">
            </div>
        </div>
        <button class="btn btn-success m-3">
            {{ isset($data)? 'تازەکردنەوە' :'زیادکردن' }}
        </button>
    </form>
</div>
@endsection
