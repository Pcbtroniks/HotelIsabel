<main>
    <div class="w-full bg-main-light px-4 xl:px-32">
        
        <div class="space-y"></div>
        
        <div class="max-w-max">
            <h2 class="pr-10 text-2xl font-bold">Nuestras Habitaciones.</h2>

            <div class="my-5 border-b-2 border-main"></div>
        </div>

        <div class="space-y"></div>

        {{-- Rooms --}}
        <div class="grid md:max-w-[1250px] mx-auto gap-5 md:grid-cols-2 md:grid-cols-6 md:place-items-center">

            {{-- Room Card --}}
            <div class="shadow-card card md:col-span-3">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/sencilla.jpg')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4 ">

                    <h3 class="font-bold mb-3 text-xl">
                        Habitación Estandar
                    </h3>

                    <p class="text-sm leading-6">
                        Déjanos consentirte con esta confortable habitación que cuenta con cama King Size. Nuestra habitación Estándar es ideal para viajes de placer o de negocios. Todas nuestras habitaciones cuentan con internet ...
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                    </div>

                </div>

            </div>

            {{-- Room Card --}}
            <div class="card shadow-card md:col-span-3">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/doble.jpg')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4 ">

                    <h3 class="font-bold mb-3 text-xl">
                        Habitación Doble
                    </h3>

                    <p class="text-sm leading-6">
                        La elección perfecta para brindar alojamiento a familias o grupos de amigos, ésta habitación está equipada con dos camas Queen Size. Aquí podrás pasar una noche cómoda y en armonía.
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                    </div>

                </div>

            </div>

            {{-- Room Card --}}
            <div class="card shadow-card md:col-span-3">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/suitlf-3.jpg')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4 ">

                    <h3 class="font-bold mb-3 text-xl">
                        Suite Luis Fernando
                    </h3>

                    <p class="text-sm leading-6">
                        La elección perfecta para brindar alojamiento a familias o grupos de amigos, ésta habitación está equipada con dos camas Queen Size. Aquí podrás pasar una noche cómoda y en armonía.
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                    </div>

                </div>

            </div>

            {{-- Room Card --}}
            <div class="card shadow-card md:col-span-3">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/sisabel.jpg')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4 ">

                    <h3 class="font-bold mb-3 text-xl">
                        Suite Isabel
                    </h3>

                    <p class="text-sm leading-6">
                        La elección perfecta para brindar alojamiento a familias o grupos de amigos, ésta habitación está equipada con dos camas Queen Size. Aquí podrás pasar una noche cómoda y en armonía.
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                    </div>

                </div>

            </div>

            {{-- Room Card --}}
            <div class="card shadow-card md:col-span-3">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/spaillaud.jpg')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4 ">

                    <h3 class="font-bold mb-3 text-xl">
                        Suite Paillaud
                    </h3>

                    <p class="text-sm leading-6">
                        La elección perfecta para brindar alojamiento a familias o grupos de amigos, ésta habitación está equipada con dos camas Queen Size. Aquí podrás pasar una noche cómoda y en armonía.
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                    </div>

                </div>

            </div>

            {{-- Room Card --}}
            <div class="card shadow-card md:col-span-3">

                <div class="w-full h-[230px] overflow-hidden">
                    <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/master-suite.png')}}" alt="Habitación sencilla">
                </div>

                <div class="p-6 pb-4 ">

                    <h3 class="font-bold mb-3 text-xl">
                        Master Suite
                    </h3>

                    <p class="text-sm leading-6">
                        La elección perfecta para brindar alojamiento a familias o grupos de amigos, ésta habitación está equipada con dos camas Queen Size. Aquí podrás pasar una noche cómoda y en armonía.
                    </p>

                    <ul class="flex mt-3 gap-4">
                        <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        <li><img src="{{ asset('assets/icons/pool.png') }}" alt="service"></li>
                    </ul>

                    <div>
                        <div class="space-y md:h-5"></div>
                        <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                    </div>

                </div>

            </div>

        </div>


        <div class="space-y"></div>
        <div class="space-y-sm"></div>
    </div>
</main>