@extends('layouts.admin')
@section('content')
<div>
    @livewire('admin.slider-edit-component',['slider' => $slider])
</div>
@endsection