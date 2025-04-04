<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Obituary Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#353535] overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        <p class="font-bold">Success</p>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form action="{{ route('obituary.store') }}" method="POST">
                    @csrf
                    <fieldset class="mb-6">
                        <legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Source:</legend>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <input id="website" type="radio" value="1" name="source" checked class="hidden peer">
                                <label for="website" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Website
                                </label>
                            </div>
                            <div>
                                <input id="newspaper" type="radio" value="2" name="source" class="hidden peer">
                                <label for="newspaper" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Newspaper
                                </label>
                            </div>
                            <div>
                                <input id="both" type="radio" value="3" name="source" class="hidden peer">
                                <label for="both" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Both
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="relative z-0 w-full mb-10 group">
                        <input type="text" name="first_name" id="first_name" autocomplete="please-dont" class="block py-2.5 px-0 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" fieldID="first_name" label="First Name *" instructions="Deceased's first name (required)" required="required" placeholder=" " required />
                        <label for="first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            First Name *
                        </label>
                    </div>
                    <div class="relative z-0 w-full mb-10 group">
                        <input type="text" name="last_name" id="last_name" autocomplete="please-dont" class="block py-2.5 px-0 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" fieldID="last_name" label="Last Name *" instructions="Deceased's last name (required)" required="required" placeholder=" " required />
                        <label for="last_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Last Name *
                        </label>
                    </div>
                    <div class="relative z-0 w-full mb-10 group">
                        <input type="date" name="dod" id="dod" class="block py-2.5 px-0 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="dod" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date of Death *</label>
                    </div>
                    <div wire:snapshot="{&quot;data&quot;:{&quot;zipCode&quot;:&quot;&quot;,&quot;city&quot;:&quot;&quot;,&quot;state&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;upXMIuzg6ELGV4dONHqp&quot;,&quot;name&quot;:&quot;zip-code-lookup&quot;,&quot;path&quot;:&quot;obituary&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;479b5df9afca588154651a501b3b4795f5813e73cbacb4d7ec8a439dad7cb08e&quot;}" wire:effects="[]" wire:id="upXMIuzg6ELGV4dONHqp">
                        <div class="relative z-0 w-full mb-10 group">
                            <input type="text" wire:model.lazy="zipCode" id="zipCode" name="zipCode" class="block py-2.5 px-0 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " maxlength="5" autocomplete="zip-nope" />
                            <label for="zipCode" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Zip Code
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-10 group">
                            <input type="text" wire:model="city" id="city" name="city" class="block py-2.5 px-0 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " autocomplete="city-nope" />
                            <label for="city" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                City
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-10 group">
                            <input type="text" wire:model="state" id="state" name="state" class="block py-2.5 px-0 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " maxlength="2" />
                            <label for="state" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                State
                            </label>
                        </div>
                    </div>
                    <fieldset class="mb-6">
                        <legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Disposition Method:</legend>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <input id="burial" type="radio" value="1" name="disposition" checked class="hidden peer">
                                <label for="burial" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Burial
                                </label>
                            </div>
                            <div>
                                <input id="cremation" type="radio" value="2" name="disposition" class="hidden peer">
                                <label for="cremation" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Cremation
                                </label>
                            </div>
                            <div>
                                <input id="shipOut" type="radio" value="3" name="disposition" class="hidden peer">
                                <label for="shipOut" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Ship Out
                                </label>
                            </div>
                            <div>
                                <input id="donation" type="radio" value="4" name="disposition" class="hidden peer">
                                <label for="donation" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Donation
                                </label>
                            </div>
                            <div>
                                <input id="entombment" type="radio" value="5" name="disposition" class="hidden peer">
                                <label for="entombment" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Entombment
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="relative z-0 w-full mb-10 group">
                        <select name="funeralHome" id="funeralHome" class="block py-2.5 px-3 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected value="">-- Select --</option>
                            @foreach ($funeralHomes as $funeralHome)
                                <option value="{{ $funeralHome->id }}">{{ $funeralHome->name }}</option>
                            @endforeach
                        </select>
                        <label for="funeralHome" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-100 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Funeral Home</label>

                    </div>
                    <div class="relative z-0 w-full mb-10 group">
                        <select name="church" id="church" class="block py-2.5 px-3 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected value="">-- Select --</option>
                            @foreach ($churches as $church)
                                <option value="{{ $church->id }}">{{ $church->name }}</option>
                            @endforeach
                        </select>
                        <label for="church" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-100 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Church</label>
                    </div>
                    <div class="relative z-0 w-full mb-10 group">
                        <select name="cemetery" id="cemetery" class="block py-2.5 px-3 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected value="">-- Select --</option>
                            @foreach ($cemeteries as $cemetery)
                                <option value="{{ $cemetery->id }}">{{ $cemetery->name }}</option>
                            @endforeach
                        </select>
                        <label for="cemetery" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-100 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cemetery</label>
                    </div>
                    <div class="relative z-0 w-full mb-10 group">
                        <select name="healthFacility" id="healthFacility" class="block py-2.5 px-3 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected value="">-- Select --</option>
                            @foreach ($healthFacilities as $healthFacility)
                                <option value="{{ $healthFacility->id }}">{{ $healthFacility->name }}</option>
                            @endforeach
                        </select>
                        <label for="healthFacility" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-100 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Health Facility</label>
                    </div>
                    <div class="relative z-0 w-full mb-10 group">
                        <select name="hospice" id="hospice" class="block py-2.5 px-3 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected value="">-- Select --</option>
                            @foreach ($hospices as $hospice)
                                <option value="{{ $hospice->id }}">{{ $hospice->name }}</option>
                            @endforeach
                        </select>
                        <label for="hospice" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-100 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hospice</label>
                    </div>
                    <div class="relative z-0 w-full mb-10 group">
                        <select name="director" id="director" class="block py-2.5 px-3 w-full text-sm text-gray-900 dark:text-gray-300 bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-700 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected value="">-- Select --</option>
                            @foreach ($directors as $director)
                                <option value="{{ $director->id }}">{{ $director->name }}</option>
                            @endforeach
                        </select>
                        <label for="director" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-100 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Director</label>
                    </div>
                    <fieldset class="mb-6">
                        <legend class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Treasured Memories Funding Campaign:</legend>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <input id="no" type="radio" value="0" name="campaign" checked class="hidden peer">
                                <label for="no" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    No
                                </label>
                            </div>
                            <div>
                                <input id="yes" type="radio" value="1" name="campaign" class="hidden peer">
                                <label for="yes" class="text-center block p-2 border border-gray-300 dark:border-gray-700 rounded-lg cursor-pointer peer-checked:bg-blue-100 dark:peer-checked:bg-blue-900 peer-checked:border-blue-500 dark:peer-checked:border-blue-500 peer-checked:font-semibold text-gray-900 dark:text-gray-300">
                                    Yes
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    <button type="reset" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Reset</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
