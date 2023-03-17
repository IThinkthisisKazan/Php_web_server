@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <from>
                <input type='text' placeholder='Email'>
                <input type='text' placeholder='Password'>
                <button action='submit' type='submit'>Submit</button>
        </form>
@endsection