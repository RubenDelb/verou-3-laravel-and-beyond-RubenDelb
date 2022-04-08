<x-app-layout>
    @auth
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{ Auth::user()->name }}!
        </h2>
    </x-slot>
    @endauth

    <div class="bg-[url('/images/background.jpg')] bg-cover bg-no-repeat">
        <div class="py-12 min-h-[85vh] grid place-content-center">
            <div class="text-center mb-10">
                <div class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-white">
                    Borrow your neighbor's tools!
                </div>
            </div>
            <div class="mx-auto sm:px-6 max-w-lg w-full">

                <form action="{{ route('search-tools') }}" method="POST">
                    @csrf
                    <div class="py-5 mt-6">
                        <select class='w-full block mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                                id="tool" name="tool" autofocus>
                            <option value="hammer">Hammer</option>
                            <option value="saw">Saw</option>
                            <option value="screwdriver">Screwdriver</option>
                        </select>
                    </div>
                    <div>
                        <select class='w-full block mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                                id="province" name="province" autofocus>
                            <option value="West-Vlaanderen">West-Vlaanderen</option>
                            <option value="Oost-Vlaanderen">Oost-Vlaanderen</option>
                            <option value="Antwerpen">Antwerpen</option>
                            <option value="Limburg">Limburg</option>
                            <option value="Vlaams-Brabant">Vlaams-Brabant</option>
                            <option value="Waals-Brabant">Waals-Brabant</option>
                            <option value="Henegouwen">Henegouwen</option>
                            <option value="Namen">Namen</option>
                            <option value="Luik">Luik</option>
                            <option value="Luxemburg">Luxemburg</option>
                        </select>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-between mt-4">
                        @guest
                            <a class="ml-1 underline text-white pb-3 sm:pb-0" href="{{ route('register') }}">
                            Not a member yet?
                            </a>
                        @endguest
                        <x-button class="w-full justify-center sm:w-auto">
                            {{ __('search') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="bg-blue-50/25 pb-6">
                <div class="mx-5">
                    <div>
                        <div class="text-2xl pt-6 text-center font-extrabold text-neutral-900 italic">Customer Experiences</div>
                    </div>
                </div>
                <br>
                <div class="smmax:snap-x smmax:snap-mandatory smmax:h-80 smmax:w-screen mx-auto smmax:overflow-scroll flex sm:justify-around sm:flex-row sm:mx-4 sm:rounded">
                    <div class="smmax:snap-start smmax:w-screen smmax:flex-shrink-0 smmax:h-auto smmax:items-center sm:m-2 justify-center text-center flex sm:flex-1 sm:rounded sm:bg-stone-100 bg-stone-100/75 sm:max-w-md sm:hover:scale-[1.01]">
                        <div class="pt-4 flex flex-col items-center justify-evenly mx-6">
                            <img class="w-32 m-4 rounded-full sm:border sm:border-gray-100 shadow-sm text-center" src="\images\joseph-gonzalez-iFgRcqHznqg-unsplash.jpg" alt="">
                            <p class="text-neutral-900 max-w-xs pb-4">"I am very happy with this service from start till end. The way they communicated was excellent. I am so gratefull that Neighbourly exists!"</p>
                            <p class="text-sm pb-4"><b>- Juan Hernandez -</b></p>
                        </div>
                    </div>
                    <div class="smmax:snap-start smmax:w-screen smmax:flex-shrink-0 smmax:h-auto smmax:items-center sm:m-2 justify-center text-center flex sm:flex-1 sm:rounded sm:bg-stone-100 bg-stone-100/75 sm:max-w-md sm:hover:scale-[1.01]">
                        <div class="pt-4 flex flex-col items-center justify-evenly mx-6">
                            <img class="w-32 m-4 rounded-full sm:border sm:border-gray-100 shadow-sm text-center" src="\images\nicolas-horn-MTZTGvDsHFY-unsplash.jpg" alt="">
                            <p class="text-neutral-900 max-w-xs pb-4">"I am very happy with this service from start till end. The way they communicated was excellent. I am so gratefull that Neighbourly exists!"</p>
                            <p class="text-sm pb-4"><b>- Jonathan Smith -</b></p>
                        </div>
                    </div>
                    <div class="smmax:snap-start smmax:w-screen smmax:flex-shrink-0 smmax:h-auto smmax:items-center sm:m-2 justify-center text-center flex sm:flex-1 sm:rounded sm:bg-stone-100 bg-stone-100/75 sm:max-w-md sm:hover:scale-[1.01]">
                        <div class="pt-4 flex flex-col items-center justify-evenly mx-6">
                            <img class="w-32 m-4 rounded-full sm:border sm:border-gray-100 shadow-sm text-center" src="/images/jake-nackos-IF9TK5Uy-KI-unsplash.jpg" alt="">
                            <p class="text-neutral-900 max-w-xs pb-4">"I am very happy with this service from start till end. The way they communicated was excellent. I am so gratefull that Neighbourly exists!"</p>
                            <p class="text-sm pb-4"><b>- Marilynn Gonzalez -</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid sm:grid-cols-2 text-center bg-stone-50  py-6">
        <section>
            <div>
                <a href="{{route('add-tool')}}" class="text-2xl font-bold text-center italic underline">Be'come' a Lender</a>
            </div>
            <section class="grid sm:grid-rows-3 w-full h-full py-6">
                <div class="grid  place-items-center grid-cols-2">
                    <div>
                        <h3 class="text-2xl font-extrabold">Honesty</h3>
                        <p class="text-sm smmax:hidden mt-2">One of the most basic core values is honesty. Honesty is demonstrated by what we say and by what we do.</p>
                    </div>
                    <img class="w-24" src="\images\trust.png" alt="">
                </div>
                <div class="grid place-items-center grid-cols-2 my-2 py-2">
                    <img class="w-24" src="\images\focus.png" alt="">
                    <div>
                        <h3 class="text-2xl font-extrabold">Respect</h3>
                        <p class="text-sm smmax:hidden mt-2">We value everyone and treat people with dignity and professionalism.</p>
                    </div>
                </div>
                <div class="grid place-items-center grid-cols-2">
                    <div>
                        <h3 class="text-2xl font-extrabold">Simplicity</h3>
                        <p class="text-sm smmax:hidden mt-2">We strive for simplicity in all things: communication, reservations & the processes.</p>
                    </div>
                    <img class="w-24" src="\images\puzzle.png" alt="">
                </div>
            </section>
        </section>
        <div class="px-8 smmax:mt-8 smmax:pt-8 smmax:border-t-2">
            <h4 class="text-2xl italic underline font-bold text-center">Contact us</h4>
            <section class="my-4">
                <h5 class="italic mt-5">Your message:</h5>
                <textarea class="my-4 caret-slate-100 rounded-md w-full shadow-sm border-gray-300 focus:border-teal-700 focus:ring focus:ring-teal-700 focus:ring-opacity-50" placeholder="Type your message here" name="Your message" rows="10"></textarea>
                <br>
                <label class="italic" for="email">Your Email: </label>
                <input class="mx-4 px-2 text-center" name="Email" id="email" type="email" placeholder="example@gmail.com">
                <x-button>Submit</x-button>
            </section>
            @auth
                <a class="text-center" href="tel:+32 498 76 54 321">Tel: +32 498 76 54 321</a>
            @endauth
        </div>
    </div>
</x-app-layout>
