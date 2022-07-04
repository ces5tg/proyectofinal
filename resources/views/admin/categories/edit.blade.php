@extends('layouts.admin')
@section('content')
<div>
    <p>estamos en el INDEX de  CATEOGIRES</p>
    @livewire('admin.category-edit-component',['category' => $category])
</div>
@endsection