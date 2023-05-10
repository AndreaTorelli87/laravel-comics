<div class="sfondo overflow-hidden">
   <div class="container py-5 d-flex justify-content-between position-relative">
      <div class="liste d-flex flex-column flex-wrap">
         @foreach ($footerLinks as $footerLink)
            <div class="px-3">
               <h4 class="fw-bold">{{ $footerLink["title"] }}</h4>
               <ul class="list-unstyled">
                  @foreach ($footerLink["links"] as $link)
                     <li>
                        <a href={{$link}}>{{ $link }}</a>
                     </li>
                  @endforeach
               </ul>
            </div>
         @endforeach
         
      </div>
      <img src="img/dc-logo-bg.png" alt="logo DC">
   </div>
</div>