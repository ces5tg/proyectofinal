@extends('layouts.admin')
@section('content')
<div>
    <div class="w-full">
      
        @livewire('admin.product-edit-component',['product'=>$product])
    </div>
</div>
@endsection