
<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Admin') }}
    </h2>
</x-slot>
<div class="py-12">
    <div >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div>
                <h2 >Get certifcates report <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?= url('list'); ?>">Certificates Report</a></h2>
            </div>
        </div>
    </div>
    <div class="py-12"> 
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="\Admin">
            @csrf
            <table class="table-fixed w-full">
                <td class="border px-4 py-2"><x-jet-label for="name" value="{{ __('Add new certificate name') }}" /></td>
                <td class="border px-4 py-2"><x-jet-input id="name" class="block mt-1" type="text" name="name"/></td>
                <td ><x-jet-button type='submit' class="ml-4">
                {{ __('Add') }}
                </x-jet-button></td>
            </table>
            </fom>
            </div>
            </div>
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
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                                
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Action</th>
                        <th class="px-4 py-2">Last Login</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                            <td class="border px-2 py-1">{{ $user->id }}</td>
                            <td class="border px-4 py-2">{{ $user->name }}</td>
                            <td class="border px-4 py-2">{{ $user->email }}</td>
                            <td class="border px-4 py-2">@if($user->status == 0) Inactive @else Active @endif</td>
                            <td class="border px-4 py-2"><a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('status', ['id'=>$user->id]) }}">@if($user->status == 1) Inactive @else Active @endif</a></td>
                            <td class="border px-4 py-2">{{ $user->last_login_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            <br><br>
            

           
            
    </div>
</div>


</x-app-layout>

