@extends('layouts.app')

@section('title')
    Contact
@endsection


@section('content')
    <div class="text-5xl font-cold text-center px-8 ">
        Contact Us
    </div>
    <div class="row">
        <div class="col">
            <form action="">
                <label for="Username" class="pt-4 pb-2">Username</label>
                <input type="text" class="p-2 rounded-2xl text-gray-700" placeholder="Your Name...">
                <label for="Password" class="pt-4 pb-2">Password</label>
                <input type="password" class="p-2 rounded-2xl text-gray-700" placeholder="Your Password...">
                <label for="Email" class="pt-4 pb-2">Email</label>
                <input type="text" class="p-2 rounded-2xl text-gray-700" placeholder="Your Email...">
            </form>
        </div>
        <div class="col">
            <iframe src="" frameborder="0"></iframe>
        </div>

    </div>
@endsection