<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('list') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-2 py-1">ID</th>
                        <!-- <th class="px-4 py-2">Name</th> -->
                        <th class="px-4 py-2">Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($certificatesCount as $certificateCount)
                    <tr>
                            <td class="border px-2 py-1">{{ $certificateCount->total}}</td>
                            <td class="border px-2 py-1">{{ $certificateCount->total}}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            <br><br>
            <div>
            
            </div>
    </div>
</div>
    
</x-app-layout>
