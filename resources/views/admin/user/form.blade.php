@extends('layouts.admin')

@section('content')
<div class="container card">
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="row p-2">
            <div class="col-4">
                <p>ئیمەیل</p>
                <input value="{{ old('email') }}" class="form-control" type="email" name="email" id="">
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
        <button class="btn btn-success m-3">زیادکردن</button>
    </form>
</div>
@endsection
