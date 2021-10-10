{{-- {{ dd($services) }} --}}
<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="px-6 py-12">
        <div class="flex flex-col mx-auto mb-10 lg:flex-row max-w-7xl">
            <div class="row-span-5 mb-3 text-white border border-opacity-0 lg:w-1/3 rounded-xl lg:mr-5">
                <img src="{{ asset('images/rdo-poster.jpg') }}" alt="" class="w-5/6 rounded-xl">
                <div class="mt-2 text-xl font-semibold text-left">Red Dead Online</div>
                <div class="font-sans text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                    deleniti illo, ut est accusantium, consequatur alias non sunt, excepturi fugiat velit quae cum.
                    Possimus dolorum ad magni eius explicabo consequuntur.</div>
            </div>
            <form action="{{ route('home.store') }}" method="POST" class="flex flex-col lg:w-2/3">
                @csrf
                <div class="w-full mb-2 text-black bg-white card">
                    <div class="card-body">
                        <h4 class="font-open card-title">Detail Pesanan</h4>
                        <label class="block mt-4">
                            <span class="text-gray-700">Platform : </span>
                            <select class="block w-6/12 mt-1 rounded-xl form-select" name="platform">
                                <option value="steam">Steam</option>
                                <option value="epic">Epic Games</option>
                                <option value="rockstar">Rockstar Games</option>
                            </select>
                            <div class="mt-2 text-xs text-gray-500">*Platform adalah tempat anda membeli game
                                tersebut.
                            </div>
                        </label>
                        <div class="flex-row w-full mt-2 text-xs md:flex md:space-x-4">
                            <div class="w-full mb-3 space-y-2 text-xs">
                                <label class="py-2 font-semibold text-gray-600">Email/Username <abbr
                                        title="required">*</abbr></label>
                                <input placeholder="Email / Username (steam)"
                                    class="block w-full h-10 px-4 border rounded-lg appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                    type="text" name="email" required>
                            </div>
                            @error('email')
                                <div class="text-sm text-red">{{ $messages }}</div>
                            @enderror
                            <div class="w-full mb-3 space-y-2 text-xs">
                                <label class="py-2 font-semibold text-gray-600">Password <abbr
                                        title="required">*</abbr></label>
                                <input placeholder="Password"
                                    class="block w-full h-10 px-4 border rounded-lg appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                    type="password" name="password" required>
                            </div>
                            @error('password')
                                <div class="text-sm text-red">{{ $messages }}</div>
                            @enderror
                        </div>
                        <div class="text-xs text-gray-500">*Dimohon untuk mematikan guard / 2 factor authentication
                            pada
                            akun anda, agar proses berjalan lancar.
                        </div>
                    </div>
                </div>
                <div class="w-full mb-2 text-black bg-white card">
                    <div class="card-body">
                        <h4 class="font-open card-title">Layanan :</h4>

                        <div class="grid grid-cols-2 gap-4 lg:grid-cols-3" x-data="{ selected: '' }">
                            @foreach ($services as $service)
                                <span name="service" id="selected" x-model="selected"
                                    class="relative p-4 my-2 overflow-visible text-gray-400 border border-gray-300 rounded hover:bg-gray-200 hover:text-gray-800 lg:my-0"
                                    @click="console.log(selected = '{{ $service->id }}')">
                                    {{ $service->name }}
                                    <div x-show="selected == '{{ $service->id }}'"
                                        class="absolute top-0 right-0 px-4 py-1 -mt-4 -mr-4 text-white bg-red-500 rounded-full">
                                        Dipilih
                                    </div>
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-full mb-2 text-black bg-white card">
                    <div class="card-body">
                        <h4 class="font-open card-title">Pembayaran :</h4>

                        <div class="grid grid-cols-1 gap-4" x-data="{selectedPaymentMethod: ''}">
                            @foreach ($payments as $payment)
                                <span name="payment"
                                    class="relative p-4 my-2 overflow-visible text-left text-gray-400 border border-gray-300 rounded hover:bg-gray-200 lg:my-0"
                                    @click="console.log(selectedPaymentMethod = '{{ $payment->id }}')">
                                    <img src="{{ asset('images/iconQris.png') }}" alt="" class="w-10 h-10">
                                    <div class="text-right text-black">Pembayaran melalui {{ $payment->name }}</div>
                                    <div x-show="selectedPaymentMethod == '{{ $payment->id }}'"
                                        class="absolute top-0 right-0 px-4 py-1 -mt-4 -mr-4 text-white bg-red-500 rounded-full">
                                        Dipilih
                                    </div>
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-full text-black bg-white card">
                    <div class="card-body">
                        <h4 class="font-open card-title">Informasi tambahan :</h4>

                        <div class="grid grid-cols-1 gap-4">
                            <div class="w-full mb-3 space-y-2 text-xs">
                                <label class="py-2 font-semibold text-gray-600">Nomor Whatsapp <abbr
                                        title="required">*</abbr></label>
                                <div class="text-right text-black">Nomor whatsapp diperlukan untuk menginformasikan
                                    status orderan secara berkala.</div>
                                <input placeholder="0812-3456-7890"
                                    class="block w-full h-16 px-4 border rounded-lg appearance-none bg-grey-lighter text-grey-darker border-grey-lighter"
                                    type="number" name="whatsapp" required>

                            </div>
                        </div>
                        <button type="submit" class="p-6 m-4 text-black bg-gray-700">Pesan sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-guest-layout>
