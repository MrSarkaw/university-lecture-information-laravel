@extends('layouts.admin')

@section('content')
<div class="container row">
    @foreach ($data as $row)
    <div class="col-4 p-2">
        <div class="card pt-3">
            <div class=" d-flex justify-content-between align-items-center p-2">
                <p>{{$row['name']}}</p>
                <div class="d-flex align-items-center">
                    <p>{{$row['count']}}</p>
                    <p><i class="{{$row['icon']}} fs-1"></i></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
