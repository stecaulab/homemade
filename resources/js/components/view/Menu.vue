<template>
   <div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <router-link class="navbar-brand" :to="{name: 'home'}" >
                {{ title }}
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Categorie
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- {{-- @foreach ($categories  as $category)

                            <a class="dropdown-item" href="{{ url('categoria/' . $category->slug) }}">

                                {{ $category->name }}
                            </a>

                            @endforeach --}} -->

                        </div>
                      </li>




                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                      </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                     <!-- Right Side Of Navbar -->

                    <slot></slot>
                    <!-- @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest -->
                </ul>
            </div>
        </div>
    </nav>
   </div>
</template>
<script>
export default {

props:['title'],

}
</script>
