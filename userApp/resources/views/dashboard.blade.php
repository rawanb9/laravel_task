<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h2>To check your certificates or to add more click <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?= url('certificates'); ?>">Certificates</a></h2>
            </div>
        </div>
    </div>
</x-app-layout>
