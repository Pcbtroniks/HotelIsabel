<section class="lg:col-span-4">

    <div class="w-full mx-auto px-4 sm:px-16 text-center">

        <div class="space-y"></div>

        <form action="{{route('contact.send')}}" method="POST" class="mx-auto">
            @csrf
            @method('POST')
            <div class="lg:flex lg:justify-between lg:gap-8">
                <div class="lg:w-1/2">
                    <input class="border-0 border-b w-full focus:ring-0 py-3 px-0"  name="name" type="text" placeholder="Nombre" value="{{old('name')}}">
                </div>
                <div class="space-y lg:hidden"></div>
                <div class="lg:w-1/2">
                    <input class="border-0 border-b w-full focus:ring-0 py-3 px-0" name="email" type="email" placeholder="Email" value="{{old('email')}}">
                </div>
            </div>
            <div class="space-y"></div>
            <div>
                <input class="border-0 border-b w-full focus:ring-0 py-3 px-0" name="subject" type="text" placeholder="Subject" value="{{old('subject')}}">
            </div>
            <div class="space-y"></div>
            <div>
                <textarea class="border-0 border-b w-full focus:ring-0 py-3 px-0 mt-4" name="message" id="" placeholder="Mensaje">{{old('message')}}</textarea>
            </div>

            <div class="text-left">
                <div class="space-y"></div>
                <div>
                        <div class="space-y md:h-5"></div>
                         <a href="{{route('contact')}}">
                            <button class="h-12 w-36 bg-main text-white text-sm font-bold">Enviar</button>
                        </a>
                    </div>
                <div class="space-y-sm"></div>
            </div>

        </form>
    </div>

</section>