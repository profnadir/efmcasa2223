<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Voitures') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Edit voiture') }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('voitures.update',$voiture) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="immatriculation" :value="__('Immatriculation')" />
                            <x-text-input id="immatriculation" name="immatriculation" type="text" class="mt-1 block w-full" :value="old('immatriculation',$voiture->immatriculation)" />
                            <x-input-error class="mt-2" :messages="$errors->get('immatriculation')" />
                        </div>

                        <div>
                            <x-input-label for="num_assurance" :value="__('Numéro Assurance')" />
                            <x-text-input id="num_assurance" name="num_assurance" type="text" class="mt-1 block w-full" :value="old('num_assurance',$voiture->num_assurance)" />
                            <x-input-error class="mt-2" :messages="$errors->get('num_assurance')" />
                        </div>

                        <div>
                            <x-input-label for="kilometrage" :value="__('Kilometrage')" />
                            <x-text-input id="kilometrage" name="kilometrage" type="text" class="mt-1 block w-full" :value="old('kilometrage',$voiture->kilometrage)" />
                            <x-input-error class="mt-2" :messages="$errors->get('kilometrage')" />
                        </div>

                        <div>
                            <x-input-label for="date_debut_location" :value="__('Date Debut Location')" />
                            <x-text-input id="date_debut_location" name="date_debut_location" type="date" class="mt-1 block w-full" :value="old('date_debut_location',$voiture->date_debut_location)" />
                            <x-input-error class="mt-2" :messages="$errors->get('date_debut_location')" />
                        </div>

                        <div>
                            <x-input-label for="date_fin_location" :value="__('Date Fin Location')" />
                            <x-text-input id="date_fin_location" name="date_fin_location" type="date" class="mt-1 block w-full" :value="old('date_fin_location',$voiture->date_fin_location)" />
                            <x-input-error class="mt-2" :messages="$errors->get('date_fin_location')" />
                        </div>

                        <div>
                            <x-input-label for="client_id" :value="__('Client ID')" />
                            <x-text-input id="client_id" name="client_id" type="text" class="mt-1 block w-full" :value="old('client_id',$voiture->client_id)" />
                            <x-input-error class="mt-2" :messages="$errors->get('client_id')" />
                        </div>
                
                        
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
