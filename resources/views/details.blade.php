@extends('layouts.app')

@section('content')

<div>

    @livewire('details-component', ['slug' => $slug])
  
</div>
@endsection