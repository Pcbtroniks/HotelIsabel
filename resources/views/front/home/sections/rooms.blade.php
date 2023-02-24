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
                        Habitación Sencilla
                    </h3>

                    <p class="text-sm leading-6">
                        Habitación Sencilla, especialmente diseñada para tu comodidad y conveniencia, recomendada para 2 personas.
                        <br>
                        Esta habitación cuenta con una mesa de trabajo, equipada con una cama King Size perfecta para una buena noche de sueño.
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
                        Contamos con 40 habitaciones dobles, en ellas podrás disfrutar de la paz y comodidad que produce hospedarse en estas habitaciones estilo rustico, un espacio lleno de confort y descanso.
                        <br>
                        Equipadas con dos camas matrimoniales, ideales para 4 personas.
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
                        Si estás en un viaje de negocios, la Suite Luis Fernando ha sido especialmente diseñada para tu comodidad y conveniencia.
                        <br>
                        Esta habitación cálida y cómoda cuenta con una área de trabajo, una cama matrimonial de lujo perfecta para un descanso satisfactorio.
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
                        No importa el motivo de tu viaje, la Suite Isabel se adapta a tus necesidades.
                        <br>
                        Compuesta con una mini sala de estar, un escritorio práctico y una cómoda cama matrimonial.
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
                        En la Suite Paillaud encontrarás un espacio placentero para una estancia inolvidable.
                        <br>
                        Un espacio amplio ideal para 4 personas compuesto de una mini sala de estar, dos camas matrimoniales.
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
                        Ven y relájate en compañía de tu pareja y disfruta de un espacio a solas y convierte tu día en un momento especial vive tu noche romántica o simplemente disfruta de tu estancia en la ciudad.

                        La Master Suite cuenta con una sala de descanso, comedor, cocina y todas las comodidades para hacer tu estancia placentera.
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