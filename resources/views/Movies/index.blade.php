@extends('layouts.main')

@section('content')

<div class="container mx-auto px-4 pt-16">
    <div class="popoular-movies">
        <h2 class="uppercase text-orange-500 text-lg font-semibold tracking-wider">Popular Movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularMovies as $movie)

          
<div class="mt-8">
    <a href="{{route('movies.show', $movie['id'])}}">
    <img src="{{ $movie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-1">
    </a>
    <div class="mt-2">
    <a href="{{route('movies.show', $movie['id'])}}" class="mt-2 text-lg hover:text-gray-300">{{$movie['title']}}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <span><svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg></span>
        <span class="ml-1">{{$movie['vote_average'] }}</span>
            <span class="ml-2"> | </span>
        <span class="ml-2">{{ $movie['release_date'] }}</span>
        </div>
        <div class="text-gray-400 text-sm">
           @foreach ($movie['genre_ids'] as $genre)
           {{ $genres->get($genre) }} @if (!$loop->last), @endif
               
           @endforeach
        </div>
    </div>
</div>
   @endforeach
     
        </div>
    </div>
</div>

    <div class="container mx-auto px-4 pt-16">
    <div class="popoular-movies">
        <h2 class="uppercase text-orange-500 text-lg font-semibold tracking-wider">Now Playing</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($nowPlayingMovies as $nowPlayingMovie)
            <div class="mt-8">
                <a href="{{route('movies.show', $nowPlayingMovie['id'])}}">
                    <img src="{{ $nowPlayingMovie['poster_path']}}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-1">
                </a>
                <div class="mt-2">
                    <a href="{{route('movies.show', $nowPlayingMovie['id'])}}" class="mt-2 text-lg hover:text-gray-300">{{$nowPlayingMovie['title']}}</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span><svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg></span>
                        <span class="ml-1">{{$nowPlayingMovie['vote_average'] }}</span>
                        <span class="ml-2"> | </span>
                        <span class="ml-2">{{ $nowPlayingMovie['release_date'] }}</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        @foreach ($nowPlayingMovie['genre_ids'] as $genre)
                        {{ $genres->get($genre) }} @if (!$loop->last), @endif
                            
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
    
@endsection