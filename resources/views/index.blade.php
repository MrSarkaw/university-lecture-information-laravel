@extends('layouts.public')
@section('content')
<div class="w-10/12 mx-auto my-10">
    <div>
        <p>College/Inst</p>
        <p class="text- font-bold text-2xl">Find Colleges</p>
        <div class="grid grid-cols-3 gap-10 mt-5">
            @foreach ($college as $row)
                <div class=" rounded-lg shadow bg-white overflow-hidden">
                    <img src="{{ asset('img/'.$row->image) }}" class="w-full rounded-lg  h-72 object-cover" alt="">
                    <div class="p-2">
                        <p class="mt-2  text-lg">{{$row->name}}</p>
                        <p class=" text-[#314ece]">{{$row->type == 1 ? 'College' : 'Institute'}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <p  class="mt-24">Programs</p>
    <p class="text- font-bold text-2xl">Browse Department by Lectures</p>
    <div class="grid grid-cols-6 gap-10 mt-5">
        @foreach ($lectures as  $row)
            <div class="p-4 rounded shadow bg-white text-center">
                <img src="https://visualpharm.com/assets/801/Module-595b40b75ba036ed117d867f.svg" class="w-14 mx-auto" alt="">
                <p class="mt-2">{{$row->name}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
