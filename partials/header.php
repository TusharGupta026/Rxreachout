<html>
  <head>
    <base target="_top">
    <title>Rxreachout</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://unpkg.com/prefixfree@1.0.0/prefixfree.min.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/shortut-logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  </head>
<body>
<!--NavBar-->
<header id="header" class="relative">
  <div class="z-50 " x-data="{servicesOpen: false, menuOpen: false, mobileOpen: false}">
    <div class="relative">
      <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-6 sm:px-6 sm:py-6 lg:px-8 md:justify-start md:space-x-10 ">
        <div>
          <a href="../index.php"  class="flex">
            <img class="h-auto w-auto sm:h-auto px-5" src="../img/logo2.png" alt="rxreachout">
          </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden">
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" x-on:click="mobileOpen = true" x-on:click.away="mobileOpen = false">
            <!-- Heroicon name: menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <div class="container hidden md:flex-1 md:flex md:items-center md:justify-end md:space-x-16">
          <nav class="flex space-x-10 font-family">
            <div class="relative">
              <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
              <a href="../index.php#services"  type="button" class="text-gray-900 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-600 focus:outline-none focus:text-gray-600 transition ease-in-out duration-150" id="solutions-button" x-on:click="servicesOpen = true">
                <span>Services</span>
              </a>
            </div>           
            <a href="../index.php#aboutus"  class="text-base leading-6 font-medium text-gray-900 hover:text-gray-600 focus:outline-none focus:text-gray-600 transition ease-in-out duration-150">
              About
            </a>
            <div class="relative">
              <!-- Item active: "text-gray-900", Item inactive: "text-gray-9000" -->
              <a href="../index.php#contactus" type="button" class="text-gray-900 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-600 focus:outline-none focus:text-gray-600 transition ease-in-out duration-150" id="menu-button" x-on:click="menuOpen = true">
                <span>Contact</span>
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  <!--
  Mobile menu, show/hide based on mobile menu state.
  Entering: "duration-200 ease-out"
    From: "opacity-0 scale-95"
    To: "opacity-100 scale-100"
  Leaving: "duration-100 ease-in"
    From: "opacity-100 scale-100"
    To: "opacity-0 scale-95"
--> 

  <div class="absolute z-20 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-show="mobileOpen">
    <div class="rounded-lg shadow-lg">
      <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
        <div class="pt-5 pb-6 px-5 space-y-6 sm:space-y-8 sm:pb-8">
          <div class="flex items-center justify-between">
            <div>
              <img class="h-auto w-auto" src="../img/logo2.png" alt="rxreachout">
            </div>
            <div class="-mr-2">
              <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <!-- Heroicon name: x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div>
            <nav class="space-y-8">
              <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4 font-family">
                <a href="../index.php#services" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md brandlime text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: shield-check -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Services
                  </div>
                </a>
                <a href="../index.php#aboutus"class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md brandlime text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: cursor-click -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    About
                  </div>
                </a>
                <a href="../index.php#contactus" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md brandlime text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: view-grid -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Contact
                  </div>
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>