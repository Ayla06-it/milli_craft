<div class=" text-white bg-blue-950">
    @extends('layouts.app')

    @section('title')
    Contact
    @endsection


    @section('content')
    <div class="text-6xl font-cold text-center px-8 ">
        Contact Us
    </div>
    <div class="my-4">
        <div class="flex text-4xl flex-col items-center justify-center min-h-[60vh">
            <div class="my-2"><label for="" class="pt-4 pb-2 text-left">Username</label></div>
            <div><input type="text" class="p-2 rounded-2xl w-300 border border-2" placeholder="Your Name..."></div>
            <div class="my-2"><label for="" class="pt-4 pb-2 text-left">Email</label></div>
            <div><input type="text" class="p-2 rounded-2xl w-300 border border-2" placeholder="Your Email..."></div>
            <div class="my-2"><label for="" class="pt-4 pb-2 text-left">Password</label></div>
            <div><input type="text" class="p-2 rounded-2xl w-300 border border-2" placeholder="Your Password..."></div>
            <div class="my-2"><label for="" class="pt-4 pb-2 text-left">Address</label></div>
            <div><input type="text" class="p-2 rounded-2xl w-300 border border-2" placeholder="Your Adress..."></div>
            <button class="bg-blue-800 text-white text-3xl p-3 m-4 rounded-full w-75 hover:bg-blue-400 hover:scale-90 hover:cursor-pointer">Submit</button>
        </div>
    </div>
    @endsection
</div>