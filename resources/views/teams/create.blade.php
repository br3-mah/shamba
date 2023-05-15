<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Lodge') }}
        </h2>
    </x-slot>

    
    <div class="content-body">
        <div class="container-fluid">
            @livewire('teams.create-team-form')
        </div>
    </div>
</x-app-layout>
