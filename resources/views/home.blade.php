@extends('layouts.app')

@section('content')
<example-component v-bind:id="{{ auth()->user()->id }}"></example-component>
@endsection
