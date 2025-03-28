<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Arr; // Import the Arr facade for cleaner checking

class ZipCodeLookup extends Component
{
    public $zipCode = '';
    public $city = '';
    public $state = '';

    // Use the updated hook for cleaner property updates
    public function updated($propertyName)
    {
        if ($propertyName === 'zipCode') {
            $this->lookupZipCode();
        }
    }

    // Or specifically target the zipCode property update
    // public function updatedZipCode($value) // The $value parameter holds the new zip code
    // {
    //     $this->lookupZipCode(); // Call a dedicated method for clarity
    // }

    public function lookupZipCode()
    {
        // Trim whitespace just in case
        $trimmedZip = trim($this->zipCode);

        // Reset fields if zip code is not 5 digits
        if (strlen($trimmedZip) !== 5) {
            $this->reset(['city', 'state']); // Use reset for multiple properties
            return; // Stop execution
        }

        $response = Http::get("https://api.zippopotam.us/us/{$trimmedZip}");

        if ($response->successful()) {
            $data = $response->json();

            // **** KEY CHANGE: Check if 'places' exists and is not empty ****
            // Using Arr::get for safe access, defaulting to null if path not found
            $place = Arr::get($data, 'places.0');

            if ($place) {
                // Safely get 'place name' and 'state abbreviation'
                $this->city = Arr::get($place, 'place name', ''); // Default to empty string if not found
                $this->state = Arr::get($place, 'state abbreviation', ''); // Default to empty string if not found
            } else {
                // Zip code valid format but not found by API
                $this->reset(['city', 'state']);
                // Optional: Add an error message property to display to the user
                // $this->addError('zipCode', 'Zip code not found.');
            }
        } else {
            // API call failed (e.g., network issue, server error)
            $this->reset(['city', 'state']);
             // Optional: Add an error message property
             // $this->addError('zipCode', 'Failed to retrieve location data.');
        }
    }


    public function render()
    {
        return view('livewire.zip-code-lookup');
    }
}
