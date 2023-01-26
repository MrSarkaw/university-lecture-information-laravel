@extends('layouts.admin')

@section('content')
<div class="container card">
   <div>
        <table class="table table-striped" style="vertical-align: middle">
            <thead>
                <tr>
                    <th>ناوی کۆلێج / پەیمانگا</th>
                    <th>جۆر</th>
                    <th>وێنە</th>
                    <th>کاتی دروستکردن</th>
                    <th>کردارەکان</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->type == 1?'کۆلێج':'پەیمانگا'}}</td>
                        <td><img src="{{ asset('img/'.$row->image) }}" width="140px" alt=""></td>
                        <td>{{$row->created_at->format('Y-m-d')}}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-primary" href="{{ route('admin.colleges.edit', ['college' => $row->id]) }}"><i class="bi bi-pen"></i></a>
                                <form id="{{ $row->id }}" action="{{ route('admin.colleges.destroy', ['college' => $row->id]) }}" method="POST">
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
