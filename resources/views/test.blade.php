@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <form>
                <input type='text' placeholder='Email'>
                <input type='text' placeholder='Password'>
                <button action='submit' type='submit'></button>
        </form>
@endsection
