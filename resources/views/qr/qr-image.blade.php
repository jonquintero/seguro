<x-guest-layout>
        <div class="flex justify-center items-center mb-4">
            <h2> Hola {{ $name }}</h2>
        </div>
        <div class="flex justify-center items-center">
            {!! $response !!}
        </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('qr.form') }}">
            {{ __('Generar otro codigo') }}
        </a>

    </div>


</x-guest-layout>
