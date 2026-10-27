@extends('layouts.app')

@section('title')
Shop
@endsection


@section('content')
<div class="text-5xl font-cold text-center px-8 ">
    Do Shopping Here
</div>
<div class="p-4 text-2xl text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus fugiat dignissimos,
    repellendus
    accusantium iste ipsum suscipit expedita id optio unde culpa impedit beatae a non!</div>
<div class="text-5xl font-bold text-center px-5">
    Here is our Yakas
</div>
<div>
    <div class="grid grid-cols-4 gap-4 text-2xl ">
        @foreach ($yakas as $yaka)
        @foreach ($images as $image)
        <div class="shadow-xl p-6 m-6 rounded-2xl bg-blue-200 hover:bg-blue-400">
            <div class="m-3 rounded-2xl">
                <img src="{{$image}}" alt="">
            </div>

            <div>
                <b>Name:</b> {{$yaka->name}}
            </div>

            <div>
                <b>Cost:</b> {{$yaka->cost}}
            </div>

            <div>
                <b>Phone number: </b> {{$yaka->number}}
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
</div>

@endsection