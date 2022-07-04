@extends('layouts.app')


@section('content')

    <div>
        @livewire('category-component',['category_slug' =>$slug])
    </div>
@endsection
