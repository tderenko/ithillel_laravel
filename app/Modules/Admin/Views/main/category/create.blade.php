<?php
/**
 * @var $category \App\Models\Category
 */
?>
@extends('admin::layouts.main')
@section('content')
    <form method="POST" action="{{ route('category.store') }}">
        @include('admin::main.category.form')
    </form>
@endsection
