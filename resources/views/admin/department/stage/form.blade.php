@extends('layouts.admin')

@section('content')
<a class="btn btn-primary" href="{{ route('admin.stages.index', ['dep_id' => request('dep_id')]) }}">گەڕاندنەوە</a>
<div class="container card">
    <form enctype="multipart/form-data" action="{{ isset($data)? route('admin.stages.update', ['stage' => $data->id]) : route('admin.stages.store') }}" method="POST">
        @csrf
        @if (isset($data))
            @method('PUT')
        @endif
        <div class="row p-2">
            <div class="col-4">
                <p>ناو</p>
                <input value="{{ isset($data)? $data->name : old('name') }}" class="form-control" type="text" name="name" id="">
            </div>
            <input type="hidden" name="dep_id" value="{{ request('dep_id') }}">

        </div>
        <button class="btn btn-success m-3">
            {{ isset($data)? 'تازەکردنەوە' :'زیادکردن' }}
        </button>
    </form>
</div>
@endsection
