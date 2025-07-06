   {{-- Navigation Bar --}}
    <nav>
       <ul>
  <li><a class="@if(request()->is('/')) active @endif" href="{{ route('home') }}">Home</a></li>
  <li><a class="@if(request()->is('news')) active @endif" href="{{ route('news') }}">News</a></li>
  <li><a class="@if(request()->is('contact')) active @endif" href="{{ route('contact') }}">Contact</a></li>
  <li><a class="@if(request()->is('about')) active @endif" href="{{ route('about') }}">About</a></li>
        </ul>
    </nav>

