<x-layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg">
        <h2 class="text-2xl font-semibold mb-6">Enter Obituary</h2>

        <form action="" method="">
            <fieldset class="mb-6">
                <legend class="block mb-2 text-sm font-medium text-gray-900">Source:</legend>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <input id="website" type="radio" value="1" name="source" checked class="hidden peer">
                        <label for="website" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Website
                        </label>
                    </div>
                    <div>
                        <input id="newspaper" type="radio" value="2" name="source" class="hidden peer">
                        <label for="newspaper" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Newspaper
                        </label>
                    </div>
                    <div>
                        <input id="both" type="radio" value="3" name="source" class="hidden peer">
                        <label for="both" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Both
                        </label>
                    </div>
                </div>
            </fieldset>
            <x-form.text-input fieldID="first_name" label="First Name *" instructions="Deceased's first name (required)" :required="true" />
            <x-form.text-input fieldID="last_name" label="Last Name *" instructions="Deceased's last name (required)" :required="true" />

            <div class="relative z-0 w-full mb-10 group">
                <input type="date" name="dod" id="dod" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="dod" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date of Death *</label>
                {{-- <p class="mt-2 text-sm text-gray-500">Deceased's date of death (required)</p> --}}
            </div>
            {{-- <x-form.text-input fieldID="zip" label="Zip Code" instructions="Deceased's zip code" :required="false" maxlength="5" pattern="[0-9]{5}"/>
            <x-form.text-input fieldID="city" label="City" instructions="Deceased's city" :required="false" />
            <x-form.text-input fieldID="state" label="State" instructions="Deceased's state abbreviation" :required="false" maxlength="2" /> --}}
            <livewire:zip-code-lookup />
            <fieldset class="mb-10">
                <legend class="block mb-2 text-sm font-medium text-gray-900">Disposition Method:</legend>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <input id="burial" type="radio" value="1" name="disposition" class="hidden peer">
                        <label for="burial" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Burial
                        </label>
                    </div>
                    <div>
                        <input id="cremation" type="radio" value="2" name="disposition" class="hidden peer">
                        <label for="cremation" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Cremation
                        </label>
                    </div>
                    <div>
                        <input id="aquamation" type="radio" value="6" name="disposition" class="hidden peer">
                        <label for="aquamation" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Aquamation
                        </label>
                    </div>
                    <div>
                        <input id="ship" type="radio" value="3" name="disposition" class="hidden peer">
                        <label for="ship" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Ship Out
                        </label>
                    </div>
                    <div>
                        <input id="donation" type="radio" value="4" name="disposition" class="hidden peer">
                        <label for="donation" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Donation
                        </label>
                    </div>
                    <div>
                        <input id="entombment" type="radio" value="5" name="disposition" class="hidden peer">
                        <label for="entombment" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Entombment
                        </label>
                    </div>
                </div>
            </fieldset>
            {{-- <div class="relative z-0 w-full mb-6 group">
                <select id="floating_select" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                    <option selected value="">-- Select --</option>
                    <option value="optionA">Option A</option>
                    <option value="optionB">Option B</option>
                    <option value="optionC">Option C</option>
                </select>
                <label for="floating_select" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Funeral Home</label>
                <p class="mt-2 text-sm text-gray-500">Deceased's funeral home</p>
            </div> --}}
            <x-form.select-input title="Funeral Home" instructions="Deceased's funeral home" fieldId="funeralHome" />
            <x-form.select-input title="Church" instructions="Deceased's church" fieldId="church" />
            <x-form.select-input title="Cemetery" instructions="Deceased's cemetery" fieldId="cemetery" />
            <x-form.select-input title="Health Facility" instructions="Deceased's health facility" fieldId="healthFacility" />
            <x-form.select-input title="Hospice" instructions="Deceased's hospice" fieldId="hospice" />
            <x-form.select-input title="Director" instructions="Director (required)" fieldId="Director" required/>
            <fieldset class="mb-10">
                <legend class="block mb-2 text-sm font-medium text-gray-900">Treasured Memories Funding Campaign:</legend>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <input id="no" type="radio" value="0" name="campaign" class="hidden peer" checked>
                        <label for="no" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            No
                        </label>
                    </div>
                    <div>
                        <input id="yes" type="radio" value="1" name="campaign" class="hidden peer">
                        <label for="yes" class="text-center block p-2 border border-gray-300 rounded-lg cursor-pointer peer-checked:bg-blue-100 peer-checked:border-blue-500 peer-checked:font-semibold">
                            Yes
                        </label>
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            <button type="reset" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Reset</button>
        </form>
    </div>
</x-layout>
