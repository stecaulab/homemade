<section class="ff-header-background-color ">
    <div class="">
        <x-main-menu :categories="$categories" :CurrentCategory="$currentCategory ?? ''">

        </x-main-menu>
        <header class="ff-header-container">
            <div class="ff-header-content-wrap">
                <div class="ff-header-left">
                    <h1>100% HomeMade</h1>
                    <p>Una frase ad effetto per prsentare cosa fai</p>
                </div>
                <div class="ff-header-right">

                    <img src="{{ asset ("img/foto3.jpg") }}" alt="" class="ff-header-right-img-cover">
                </div>

            </div>


        </header>

    </div>
</section>
