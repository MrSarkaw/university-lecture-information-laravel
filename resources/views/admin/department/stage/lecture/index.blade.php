@extends('layouts.admin')

@section('content')
<div class="container card">
   <div>
       <a href="{{ route('admin.lectures.create', ['dep_id' => request('dep_id'), 'stage_id' => request('stage_id')]) }}" class="btn btn-success m-2">زیادکردن</a>
       <a class="btn btn-primary" href="{{ route('admin.stages.index', ['stage_id' => request('stage_id'), 'dep_id' => request('dep_id')]) }}">گەڕاندنەوە</a>
        <table class="table table-striped" style="vertical-align: middle">
            <thead>
                <tr>
                    <th>ناو وانە</th>
                    <th>قۆناغ</th>
                    <th>زانیاری</th>
                    <th>کاتی دروستکردن</th>
                    <th>کردارەکان</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->stage->name}}</td>
                        <td>{{$row->info}}</td>
                        <td>{{$row->created_at->format('Y-m-d')}}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-primary" href="{{ route('admin.lectures.edit', ['lecture'=> $row->id, 'stage_id' => request('stage_id'), 'dep_id' => request('dep_id')]) }}"><i class="bi bi-pen"></i></a>
                                <form id="{{ $row->id }}" action="{{ route('admin.lectures.destroy', ['lecture' => $row->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="deleteFunction({{ $row->id }})" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $data->links('pagination::bootstrap-5') !!}
   </div>
</div>
@endsection
