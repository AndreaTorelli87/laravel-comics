<div class="sfondo overflow-hidden">
   <div class="container py-5 d-flex justify-content-between position-relative">
      <div class="liste d-flex flex-column flex-wrap">
         <div v-for="(gruppo, i) in footerLinks" class="px-3">
            <h4 class="text-white fw-bold">{{ gruppo.title }}</h4>
            <ul class="list-unstyled">
               <li v-for="link in gruppo.links">
                  <a :href="link">{{ link }}</a>
               </li>
            </ul>
         </div>
      </div>
      <img src="img/dc-logo-bg.png" alt="logo DC">
   </div>
</div>