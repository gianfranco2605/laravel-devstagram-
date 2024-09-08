@extends('layouts.app')

@section('titulo')
    Registrate in DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 shadow-md rounded-lg">

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">
                        Nombre
                    </label>
                    <input name="name" id="name" type="text" placeholder="Tu Nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror "
                        value="{{ old('name') }}" />

                    {{-- Validation --}}
                    @error('name')
                        <p class=" text-red-500 my-3 text-center rounded-lg text-sm p-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">
                        Username
                    </label>
                    <input name="username" id="username" type="text" placeholder="Tu Nombre de Usuario"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror "
                        value="{{ old('username') }}" />
                    @error('username')
                        <p class=" text-red-500 my-3 text-center rounded-lg text-sm p-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">
                        Tu Email
                    </label>
                    <input name="email" id="email" type="text" placeholder="La tua Email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('username') }}" />
                    @error('email')
                        <p class=" text-red-500 my-3 text-center rounded-lg text-sm p-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">
                        Password
                    </label>
                    <input name="password" id="password" type="text" placeholder="Password de Registro"
                        class="border p-3 w-full rounded-lg" @error('password') border-red-500 @enderror
                        value="{{ old('username') }}" />
                    @error('password')
                        <p class=" text-red-500 my-3 text-center rounded-lg text-sm p-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confirmation">
                        Repetir Password
                    </label>
                    <input name="password_confirmation" id="password_confirmation" type="text"
                        placeholder="Repite tu Password" class="border p-3 w-full rounded-lg"
                        @error('name') border-red-500 @enderror value="{{ old('username') }}" />
                    @error('password')
                        <p class=" text-red-500 my-3 text-center rounded-lg text-sm p-1">{{ $message }} </p>
                    @enderror
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection('contenido')
