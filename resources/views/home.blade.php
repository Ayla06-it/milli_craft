@extends('layouts.app')


@section('title')
Home
@endsection


@section('content')

<article>
    <img class="float-left w-64 h-48 object-cover rounded-2xl hover:shadow-2xl mr-12 my-3"
        src="{{ asset('images/mountain.avif') }}" />
    <div class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam neque voluptas rem obcaecati
        voluptatibus aut alias minus consequuntur. Praesentium deserunt eligendi mollitia aut! Itaque temporibus velit
        est, nostrum tempora dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quis deleniti
        placeat voluptates quam laboriosam suscipit quae ea molestiae sunt? Assumenda consequuntur beatae laboriosam cum
        recusandae necessitatibus itaque consectetur ullam. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Veniam cumque, voluptate sint iure eaque excepturi enim possimus sed deserunt omnis, velit laborum autem,
        nesciunt adipisci. Amet minus eveniet necessitatibus perspiciatis. Maybe we can live without libraries, people
        like you and me. ...</div>
</article>

<div class="flex justify-between text-2xl mx-6 py-4 border border-gray-400 rounded-2xl">
    <div>
        Bizin ulanyjylarymyz:
    </div>
</div>




@endsection