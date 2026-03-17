@extends('layouts.app')

@section('title', 'larapets: Register')

@section('content')
    @include('partials.navbar')
    <section class=

    <li>
        <a href=
<div class="flex-none">
    <ul class="meni menu-horizontal px-1">
        @guest
            <li><a>Login</a></li>
        @endguest
    </ul class="bg-black/60 rounded-t-none m-0 w-48 -ms-7">
        <li>
            <a href="{{ url('users') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5"> 
                    <path d="M178,40c-20.65,0-29.73,8.88-50,23.89C116.73,48.88,98.6"> </path>
                </svg>
                Adoptions models
            </a>
        </li>
        <li class="hover:bg-white/20 rounded-md">
            <form methodd="POST" action="{{ route('logout') }}">
                @csrf
                <a></a>

            </form>


        </li>
        
