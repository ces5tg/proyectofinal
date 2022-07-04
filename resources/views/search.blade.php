@extends('layouts.app')

@section('content')
    <div>
        


        @livewire('search-component', [ 'search' => $product])
    </div>
@endsection
