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
                    {{ __('Liste des voitures') }} : <a href="{{ route('voitures.create') }}">{{ __('New') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table
                        class="table-auto border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                        <thead class="bg-slate-50 dark:bg-slate-700">
                            <tr>
                                <th
                                    class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                    ID</th>
                                <th
                                    class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                    IMMATRICULATION</th>
                                <th
                                    class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                    NUMERO ASSURANCE</th>
                                <th
                                    class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                    Kilometrage</th>
                                <th
                                    class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                    DATE DEBUT LOCATION</th>
                                <th
                                    class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                    DATE FIN LOCATION</th>
                                <th
                                    class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                    CLIENT ID</th>
                                <th
                                    class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                    ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($voitures as $voiture)
                            <tr>
                                <td
                                    class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $voiture->id }}</td>
                                <td
                                    class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $voiture->immatriculation }}</td>
                                <td
                                    class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $voiture->num_assurance }}</td>
                                <td
                                    class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $voiture->kilometrage }}</td>
                                <td
                                    class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $voiture->date_debut_location }}</td>
                                <td
                                    class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $voiture->date_fin_location }}</td>
                                <td
                                    class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $voiture->client_id }}</td>
                                <td
                                    class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    <a href="{{ route('voitures.edit',$voiture) }}">Edit</a>
                                    <form action="{{ route('voitures.destroy',$voiture) }}" method="Post">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                        Pas de Voitures
                                    </td>
                                </tr>
                            @endforelse

                            
                            {{ $voitures->links() }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
