{{-- Navbar --}}
<header class="bg-transparent backdrop-blur fixed w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="p-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logomark.svg') }}" alt="Logo" class="">
                </a>
            </div>

            <div class="flex items-center px-4">
                <button type="button" id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg w-full right-0 top-full lg:block lg:static lg:bg-transparent lg:shadow-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="{{ route('home') }}" class="{{ (request()->is('/')) ? 'text-white font-bold' : '' }} text-base text-slate-300 py-2 mx-8 flex group-hover:text-white hover:text-white transition duration-300">Home</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('about-me') }}" class="{{ (request()->is('about-me')) ? 'text-white font-bold' : '' }} text-base text-slate-300 py-2 mx-8 flex group-hover:text-white hover:text-white transition duration-300">About Me</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('data-list') }}" class="{{ (request()->is('data-list')) ? 'text-white font-bold' : '' }} text-base text-slate-300 py-2 mx-8 flex group-hover:text-white hover:text-white transition duration-300">Data List</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('contact') }}" class="{{ (request()->is('contact')) ? 'text-white font-bold' : '' }} text-base text-slate-300 py-2 mx-8 flex group-hover:text-white hover:text-white transition duration-300">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>