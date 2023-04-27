<footer>

    <div class="bg-secondary relative py-20 px-4 flex md:flex-row md:px-6 sm:justify-center flex-col items-center gap-24">

        <div>
            <img src="{{ asset('assets/logo-alt.png') }}" alt="Logo Country Hotel">
        </div>

        <div class="sm:order-3">
            <ul class="grid grid-cols-2 gap-7">
                <li><a target="_blank" href="https://api.whatsapp.com/send?phone=523322415915&text=Hola,%20necesito%20ayuda"><img src="{{ asset('assets/icons/socials/WhatsApp Inc.svg') }}" alt="WhatsApp"></a></li>
                <li><a target="_blank" href="https://www.facebook.com/hotelisabelgdl"><img src="{{ asset('assets/icons/socials/Facebook.svg') }}" alt="Facebook"></a></li>
                <li class="col-span-2 mx-auto"><a target="_blank" href="https://www.instagram.com/hotelisabelgdl/"><img src="{{ asset('assets/icons/socials/Instagram.svg') }}" alt="Instagram"></a></li>
            </ul>
        </div>

        <div class="sm:w-[335px] px-3 text-white">
            <h4>Información de contacto</h4>

            <div class="h-4"></div>

            <div class="flex flex-col gap-12 text-left font-bold">
                <a class="flex gap-2" href="tel:+523338230463">
                    <img src="{{ asset('assets/icons/call-outline.svg') }}" alt="Location Icon">
                    <span>+52 33 3826 2630</span>
                </a>
                <a class="flex gap-2" href="mailto:523338230463">
                    <img src="{{ asset('assets/icons/services/mail-outline.svg') }}" alt="Location Icon">
                    <span>reservaciones@hotelisabel.com</span>
                </a>
                <a class="flex gap-2" href="#">
                    <img src="{{ asset('assets/icons/location-outline.svg') }}" alt="Location Icon">
                    <span>
                        José Gpe. Montenegro #1572
                        44170 Guadalajara, Jalisco, México
                    </span>
                </a>
            </div>
        </div>

    </div>

    <div class="bg-main-dark p-4">

        <ul class="text-gray font-bold flex flex-wrap gap-2 justify-center">
            <li><a href="{{route('home')}}">Inicio</a></li>
            <li><a href="{{route('installations')}}">Instalaciones</a></li>
            <li><a href="{{route('rooms')}}">Habitaciones</a></li>
            <li><a href="{{route('services')}}">Servicios</a></li>
            <li><a href="{{route('contact')}}">Contacto</a></li>
        </ul>

    </div>

    <div class="bg-main-dark p-2 text-center">
        <p class="text-white/50 text-sm">
            &copy; 
            <script>document.write(new Date().getFullYear())</script>
            <noscript>2023</noscript>
            Hotel Isabel. Todos los derechos reservados.
            Powered by <a href="https://pcbtroniks.com" target="_blank" class="font-bold">Pcbtroniks</a>.
        </p>
    </div>

</footer>