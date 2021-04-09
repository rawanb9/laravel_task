<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Certificates') }}
        </h2>
    </x-slot>
    <div class="py-5">
    @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
     @endif
     </div>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h3>Your Certificates</h3>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
    
    <table class="table-fixed w-full">
    
    <tr>
    <thead>
        <tr class="bg-gray-100">
            <th class="px-2 py-1">Certificate ID</th>
            <th class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <td>
    <form method="POST" >
        @csrf
    @foreach( $certifactesByUser as $certificate)
    <tr>
        <td class="border px-4 py-2">{{ $certificate->certificateId}}</td>
        <td class="border px-4 py-2"><a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('certificateDelete', ['id'=> $certificate->id])}}">Remove</a></td>               
    </tr>
    @endforeach
    </form>
    </td>
    </tr>
    </table>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h3>Here you can add more certicate</h3>
            </div>
        </div>
    </div>
    <table class="table-fixed w-full">
    <thead>
        <tr class="bg-gray-100">
            <th class="px-2 py-1">Certificate ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody>
    <form method="POST" >
        @csrf
    @foreach( $certificates as $certificate)
    <tr>
        <td class="border px-4 py-2">{{ $certificate->id}}</td>
        <td class="border px-4 py-2">{{ $certificate->name}}</td>
        <td class="border px-4 py-2"><a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('usercertificates', ['id'=> $certificate->id])}}">Add</a></td>               
    </tr>
    @endforeach
    </form>
    </tbody>
    </table>
    </div>
</x-app-layout>