<div class="container d-flex justify-content-between">
   {{-- <img src="{{Vite::asset('resources//img/dc-logo.png')}}" alt="Logo DC" class="p-3"> --}}
   <ul class="d-flex list-unstyled m-0">
      <li class="px-3">
         @foreach ($navLinks as $link)
            <a class="text-decoration-none fw-bold">{{ $link }}</a>
         @endforeach
      </li>
   </ul>
</div>
