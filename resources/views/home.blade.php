@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
<div id="jumbo"></div>
<div class="sfondo bg-black">
   <div class="container">
      <h2 class="text-white fw-bold p-3 d-inline-block">CURRENT SERIES</h2>
   </div>
   <div class="container py-5 d-flex flex-wrap">
      <div class="row row-cols-6">
         @foreach ($DB_Comics as $comic)
            <div class="card">
               <div class="imgWrapper">
                  <img class="w-100" src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}" />
               </div>
               <h6 class="my-2">{{ $comic["title"] }}</h6>
            </div>
         @endforeach
      </div>
   </div>
</div>
@endsection