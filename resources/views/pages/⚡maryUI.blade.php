<?php

use Livewire\Component;
use Mary\Traits\Toast;

new class extends Component
{
    use Toast;
    public $user;

    public $users;
    
    public $headers;

    public function mount()
    {
      $this->user = \App\Models\User::first();
      $this->users = [
          ['id' => 1, 'name' => 'John Doe', 'city' => ['name' => 'New York']],
          ['id' => 2, 'name' => 'Jane Smith', 'city' => ['name' => 'Los Angeles']],
          ['id' => 3, 'name' => 'Alice Johnson', 'city' => ['name' => 'Chicago']],
          ['id' => 4, 'name' => 'Bob Brown', 'city' => ['name' => 'Houston']],
          ['id' => 5, 'name' => 'Charlie Davis', 'city' => ['name' => 'Phoenix']],
      ];

      $this->headers = [
          ['key' => 'id', 'label' => '#'],
          ['key' => 'name', 'label' => 'Nice Name'],
          ['key' => 'city.name', 'label' => 'City']       // <-- nested attributes 
      ];
    } 

    public function save()
    { 
      $this->success("We are done, check it out"); 
    }
};
?>

<div>
    <x-mary-alert title="You have 10 messages" icon="o-exclamation-triangle" />
    <flux:separator class="my-5" />
    <x-mary-alert icon="o-home" class="alert-success">
      I am using the <strong>default slot.</strong>
    </x-mary-alert> 
    <flux:separator class="my-5" />
    <x-mary-collapse separator>
        <x-slot:heading>
            Hello
        </x-slot:heading>
        <x-slot:content>
            You!
        </x-slot:content>
    </x-mary-collapse>
    <flux:separator class="my-5" />
    <flux:button wire:click="save">Button</flux:button>
    <flux:separator class="my-5" />
    <x-mary-accordion wire:model="group">
        <x-mary-collapse name="group1">
            <x-slot:heading>Group 1</x-slot:heading>
            <x-slot:content>Hello 1</x-slot:content>
        </x-mary-collapse>
        <x-mary-collapse name="group2">
            <x-slot:heading>Group 2</x-slot:heading>
            <x-slot:content>Hello 2</x-slot:content>
        </x-mary-collapse>
        <x-mary-collapse name="group3">
            <x-slot:heading>Group 3</x-slot:heading>
            <x-slot:content>Hello 3</x-slot:content>
        </x-mary-collapse>
    </x-mary-accordion>
    <flux:separator class="my-5" />
    <x-mary-card title="Your stats" subtitle="Our findings about you" shadow separator>
        I have title, subtitle and separator.
    </x-mary-card>
    <flux:separator class="my-5" />
    <x-mary-popover position="top-start" offset="20">
      <x-slot:trigger>
          <x-mary-button label="Hey" />
      </x-slot:trigger>
      <x-slot:content>
          How are you?
      </x-slot:content>
    </x-mary-popover>
    <flux:separator class="my-5" />
    <div class="flex space-x-4">
      <x-mary-loading />
      <x-mary-loading class="progress-primary" />
      <x-mary-loading class="loading-dots" />
      <x-mary-loading class="loading-bars" />
      <x-mary-loading class="loading-ring" />
      <x-mary-loading class="loading-infinity loading-xs" />
    </div>

    <flux:separator class="my-5" />

     

    {{-- You can use any `$wire.METHOD` on `@row-click` --}}
    <x-mary-table :headers="$headers" :rows="$users" striped @row-click="alert($event.detail.name)" />

    <flux:separator class="my-5" />

    <flux:skeleton.group animate="shimmer">
        <flux:skeleton.line class="mb-2 w-1/4" />
        <flux:skeleton.line />
        <flux:skeleton.line />
        <flux:skeleton.line class="w-3/4" />
    </flux:skeleton.group>
    

</div>