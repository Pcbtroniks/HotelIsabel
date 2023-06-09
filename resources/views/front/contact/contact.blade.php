@extends('layout.base')

@section('page')

@include('front.contact.sections.contact-tittle')

<main class="lg:grid lg:grid-cols-6">

    @include('front.contact.sections.contact-form')
    
    @include('front.contact.sections.info-box')

</main>

@include('front.contact.sections.map')


@endsection

@section('styles')

{{-- Owl Carousel --}}
<link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.theme.default.min.css') }}">


@endsection

@section('scripts')

<!-- SweetAlert -->
<script src="{{ asset('assets/js/libs/sweetalert2.js') }}"></script>
@if (session()->has('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: '¡Gracias por contactarnos!',
        text: '{{ session('success') }}',
    })
</script>
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>    
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $error }}',
            toast: true,
        })    
    </script>
    @endforeach
    <h2></h2>
@endif

{{-- Owl Carousel --}}
<script src="{{ asset('assets/js/libs/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/owl-carousel/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoWidth:true,

        });
    });
</script>


{{-- Menu --}}
<script>
    const aside = document.querySelector('#aside');
    const lateralMenu = document.querySelector('#lateral-menu');
    function closeNav(){
        aside.classList.remove('w-full');
        document.body.classList.remove('overflow-hidden');
        lateralMenu.classList.remove('w-72');
        lateralMenu.classList.add('w-0');
    }
    function openNav(){
        aside.classList.add('w-full');
        document.body.classList.add('overflow-hidden');
        lateralMenu.classList.add('w-72');
        lateralMenu.classList.remove('w-0');
    
    }
</script>

@endsection