@extends('layouts.app')

@section('content')
<example-component v-bind:id="{{ auth()->id() }}"></example-component>
@endsection
