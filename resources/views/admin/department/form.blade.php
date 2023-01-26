@extends('layouts.admin')

@section('content')
<div class="container card">
    <form enctype="multipart/form-data" action="{{ isset($data)? route('admin.departments.update', ['department' => $data->id]) : route('admin.departments.store') }}" method="POST">
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
                <p>کۆلێج/پەیمانگا</p>
                <select name="college_id" class="form-control" id="">
                    <option value=""></option>
                    @foreach ($colleges as $row)
                        <option {{ isset($data)? ($data->college_id == $row->id? 'selected' :'') : old('type') }} value="{{ $row->id }}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <button class="btn btn-success m-3">
            {{ isset($data)? 'تازەکردنەوە' :'زیادکردن' }}
        </button>
    </form>
</div>
@endsection
