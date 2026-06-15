@extends('layout.base')

@section('page')

{{-- Restaurant Menus --}}

<section class="bg-pattern-diamonds">

    @include('front.menus.sections.header-menus')
    
    @include('front.menus.sections.links')

</section>

<span class="w-0"></span>
@endsection

@section('styles')

<!-- AOS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- DatePicker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }

        .nth-rm li {
            margin-right: .7rem;
    }

    input[type="date"]::-webkit-inner-spin-button,
    input[type="date"]::-webkit-calendar-picker-indicator {
        display: none;
        -webkit-appearance: none;
    }


    .shadow-card {
        box-shadow: 0px 4px 4px 0px #00000040;
    }
    .text-shadow {
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    }
    .servs:hover {
        animate__animated animate__bounce
    }

    .inner-shadow {
        box-shadow: 0px 0px 14px 3px rgba(0,0,0,0.49) inset;
        -webkit-box-shadow: 0px 0px 14px 3px rgba(0,0,0,0.49) inset;
        -moz-box-shadow: 0px 0px 14px 3px rgba(0,0,0,0.49) inset;
    }

    .rounded-shadow:hover {
        text-shadow: 0px 0px 15px rgba(255,255,255,1);
    }

    .bg-pattern-diamonds {
    --s: 44px; /* control the size*/
    --c2: #084c7f;
    --c1: #fef5e9;
    
    --_g: radial-gradient(calc(var(--s)/2),var(--c1) 97%,#0000);
    background:
        var(--_g),var(--_g) calc(2*var(--s)) calc(2*var(--s)),
        repeating-conic-gradient(from 45deg,#0000 0 25%,var(--c2) 0 50%) calc(-.707*var(--s)) calc(-.707*var(--s)),
        repeating-linear-gradient(135deg,var(--c1) calc(var(--s)/-2) calc(var(--s)/2),var(--c2) 0 calc(2.328*var(--s)));
    background-size: calc(4*var(--s)) calc(4*var(--s));
    }
</style>

@endsection
@section('js')

<!-- DatePicker -->

<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker-full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/locales/es.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();

    const aside = document.querySelector('#aside');
    const lateralMenu = document.querySelector('#lateral-menu');

    function closeNav(){

        aside.classList.toggle('w-full');
        document.body.classList.remove('overflow-hidden');
        lateralMenu.classList.toggle('w-72');

    }

    function openNav(){

        aside.classList.toggle('w-full');
        document.body.classList.add('overflow-hidden');
        lateralMenu.classList.toggle('w-72');
    
    }

</script>
<script src="{{ asset('/assets/js/home.js') }}"></script>

@endsection