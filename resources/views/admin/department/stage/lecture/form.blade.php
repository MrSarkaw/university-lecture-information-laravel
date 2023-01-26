@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ route('admin.lectures.index', ['dep_id' => request('dep_id'), 'stage_id' => request('stage_id')]) }}">گەڕاندنەوە</a>
<div class="container card">
    <form enctype="multipart/form-data" action="{{ isset($data)? route('admin.lectures.update', ['lecture' => $data->id]) : route('admin.lectures.store') }}" method="POST">
        @csrf
        @if (isset($data))
            @method('PUT')
        @endif
        <div class="row p-2">
            <div class="col-4">
                <p>ناو</p>
                <input value="{{ isset($data)? $data->name : old('name') }}" class="form-control" type="text" name="name" id="">
            </div>
            <div class="col-10 mt-4">
                <p>زانیاری لەسەر بەش</p>
                <textarea class="form-control"  name="info" id="">{{ isset($data)? $data->info : old('info') }}</textarea>
            </div>
            <input type="hidden" name="stage_id" value="{{ request('stage_id') }}">

        </div>
        <button class="btn btn-success m-3">
            {{ isset($data)? 'تازەکردنەوە' :'زیادکردن' }}
        </button>
    </form>
</div>
@endsection
