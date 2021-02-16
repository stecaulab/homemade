<section>
   <nav class="navbar navbar-expand-lg justify-content-between ddd-hero" id="nav">
        <a class="navbar-brand" href="{{ url('/') }}">
            FF-HomemadeBlog-master
        </a>


        <div class="overlaySearch" id="mySearch">
            <a href="javascript:void(0)" class="closebtn" onclick="closeSearch()">&times;</a>
            <div class="container overlay-content ">
                <div class="row">
                    {{-- button to close overlay Search --}}

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <form action={{ url('/search') }}>
                            <input class="search-field" type="text" placeholder="Search" id="search" name="q" value required>
                            <input type="submit" value="Search">
                         </form>
                    </div>
                </div>
            </div>
        </div>



        <div  class="global_nav_open">
            {{-- <span  id="openNav"  >&#9776;</span> --}}
            <div class="btnSearch">
                <div onclick="openSearch()">
                    <span><i class="fas fa-search"></i></span>
                </div>
            </div>


                <div onclick="openNav()" class="opennav">
                    <span class="bg--Color--panda-black global_nav_open_top"></span>
                    <span class="bg--Color--panda-black global_nav_open_bottom"></span>
                </div>

        </div>

        <div class="overlay" id="myNav">
            {{-- button to close overlay navigation --}}
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            {{-- Overlay content  --}}
           <div class="overlay-content">
            <ul class="mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                  </li>

                  <li class="nav-item dropdown">
                        <a class="nav-link" href="#" onclick="openSubnav()" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorie&nbsp;&#8594;
                        </a>
                        <div class="global-subnav" aria-labelledby="navbarDropdown" id="subNav">
                            <a href="javascript:void(0)" class="close-subnav" id ="closeSubNav" onclick="closeSubnav()">&#8592;</a>
                            @foreach ( $categories as $category)
                                @if ($category->id == 0)
                                    @continue
                                @endif

                            <a class="global-subnav-item" href="{{ url('category/' . $category->slug) }}">

                                {{ $category->name }}
                            </a>
                            @if ($category->id == 3)
                                @break
                            @endif

                            @endforeach

                            <a class="global-subnav-item" href="{{ url('category') }}">

                                And More...
                            </a>

                        </div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/contatti">Contatti</a>
                  </li>
            </ul>
            </div>
        </div>


    </nav>
</section>
