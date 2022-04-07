<x-app-layout>
    @auth
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{ Auth::user()->name }}!
        </h2>
    </x-slot>
    @endauth

    <div class="bg-[url('/images/background.jpg')] bg-cover bg-no-repeat">
        <div class="py-12 ">
            <div class="mx-auto sm:px-6 lg:px-8 max-w-lg sm:w-full">
                <div class="mt-4 text-center">
                    <div class="text-xl sm:text-3xl font-extrabold text-white">
                        Borrow your neighbor's tools!
                    </div>
                </div>
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
                <div class="row mx-5">
                    <div class="col-12">
                        <div class="text-2xl text-stone py-8 text-center font-extrabold italic">Customer Experiences</div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row mx-4 rounded">
                    <div class="text-center flex-1 sm:rounded bg-orange-50 sm:mr-2 hover:scale-[1.03]">
                        <div class="pt-4 grid mx-6">
                            <p class="text-neutral-900">"I am very happy with this service from start till end. The way they communicated was excellent. I am so gratefull that Neighbourly exists!"</p>
                            <p class="py-3 text-sm"><b>- Monique Lhullier -</b></p>
                        </div>
                    </div>
                    <div class="text-center flex-1 sm:rounded bg-orange-50 sm:mr-2 hover:scale-[1.03]">
                        <div class="pt-4 grid mx-6">
                            <p class="text-neutral-900">"I am very happy with this service from start till end. The way they communicated was excellent. I am so gratefull that Neighbourly exists!"</p>
                            <p class="py-3 text-sm"><b>- Monique Lhullier -</b></p>
                        </div>
                    </div>
                    <div class="text-center flex-1 sm:rounded bg-orange-50 hover:scale-[1.03]">
                        <div class="pt-4 grid mx-6">
                            <p class="text-neutral-900">"I am very happy with this service from start till end. The way they communicated was excellent. I am so gratefull that Neighbourly exists!"</p>
                            <p class="py-3 text-sm"><b>- Monique Lhullier -</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid py-6 grid-cols-2 bg-stone-50 text-center">
        <div>
            <h3 class="text-2xl font-bold text-center">Be'come' a Lender</h3>
        </div>
        <div class="px-5">
            <h4><b>Contact-us</b></h4>
            <form class="contactForm" action="https://formspree.io/f/xlezdzkd" method="post">
                <h5 class="italic mb-3 mt-5">Your message:</h5>
                <textarea class="rounded-md w-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Type your message here" name="Your message" id="" cols="30" rows="10"></textarea>
                <br>
                <label class="italic" for="email">Your Email: </label>
                <input class="contactItem mailItem ms-4 px-2 text-center" name="Email" id="email" type="email" placeholder="example@gmail.com">
                <x-button>Submit</x-button>


            </form>
            <a class="text-center phoneNumber" href="tel:++32 498 76 54 321">+32 498 76 54 321</a>
        </div>
    </div>
    <footer class="bg-neutral-500 text-sm text-center">
        <div class="font-bold pt-6">Copyright © 2022 - Neighbourly</div>
        <div class="px-8 pb-4">Belgium's No. 1 Tool loaning platform | Site Map Use of this site
            constitutes acceptance of our User Agreement, Privacy and Cookies policy | Legal.
            Contact us :
            <a href="tel:+32 498 76 54 321">+32 498 76 54 321</a></div>
    </footer>
</x-app-layout>
