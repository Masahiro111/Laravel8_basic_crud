<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.js" defer=""></script>
</head>

<body class="antialiased font-sans bg-gray-200">
  <div class="" style="">
    <div class="bg-gray-100">

      <div>
        <nav x-data="{ open: false }" class="bg-gray-800">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                    alt="Workflow">
                </div>
                <div class="hidden md:block">
                  <div class="ml-10 flex items-baseline space-x-4">


                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>


                    <a href="#"
                      class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>


                    <a href="#"
                      class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>


                    <a href="#"
                      class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>


                    <a href="#"
                      class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reports</a>

                  </div>
                </div>
              </div>
              <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                  <button
                    class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                      </path>
                    </svg>
                  </button>

                  <!-- Profile dropdown -->
                  <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
                    class="ml-3 relative">
                    <div>
                      <button type="button"
                        class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        id="user-menu" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                          src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                          alt="">
                      </button>
                    </div>

                    <div x-description="Dropdown menu, show/hide based on menu state." x-show="open"
                      x-transition:enter="transition ease-out duration-100"
                      x-transition:enter-start="transform opacity-0 scale-95"
                      x-transition:enter-end="transform opacity-100 scale-100"
                      x-transition:leave="transition ease-in duration-75"
                      x-transition:leave-start="transform opacity-100 scale-100"
                      x-transition:leave-end="transform opacity-0 scale-95"
                      class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                      role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                        Profile</a>

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        role="menuitem">Settings</a>

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                        out</a>

                    </div>

                  </div>
                </div>
              </div>
              <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                  class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                  aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                  x-bind:aria-expanded="open.toString()">
                  <span class="sr-only">Open main menu</span>
                  <svg x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6"
                    :class="{ 'hidden': open, 'block': !(open) }" x-description="Heroicon name: outline/menu"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                  </svg>
                  <svg x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6"
                    :class="{ 'block': open, 'hidden': !(open) }" x-description="Heroicon name: outline/x"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <div x-description="Mobile menu, show/hide based on menu state." class="md:hidden" id="mobile-menu"
            x-show="open" style="display: none;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">


              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>


              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>


              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>


              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>


              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Reports</a>

            </div>
            <div class="pt-4 pb-3 border-t border-gray-700">
              <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                  <img class="h-10 w-10 rounded-full"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                    alt="">
                </div>
                <div class="ml-3">
                  <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                  <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                </div>
                <button
                  class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                  <span class="sr-only">View notifications</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="mt-3 px-2 space-y-1">

                <a href="#"
                  class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your
                  Profile</a>

                <a href="#"
                  class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>

                <a href="#"
                  class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign
                  out</a>

              </div>
            </div>
          </div>
        </nav>

        <header class="bg-white shadow">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
              {{ Str::studly( Route::currentRouteName() ) }}
            </h1>
          </div>
        </header>
        <main>
          <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
              <div class="container">
                @yield('content')
              </div>
            </div>
            <!-- /End replace -->
          </div>
        </main>
      </div>

    </div>
  </div>
  <div style="clear: both; display: block; height: 0px;"></div>
</body>

</html>