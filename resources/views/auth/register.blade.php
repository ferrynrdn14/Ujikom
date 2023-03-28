@extends('layouts.guest')
@section('title')
Ferr Laundry | Register
@endsection
@section('content')
    
    <div
      class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1"
    >
      <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
        <div class="mt-12 flex flex-col items-center">
          <h1 class="text-2xl xl:text-3xl font-extrabold">
            Sign up for Laundry App
          </h1>
          <div class="w-full flex-1 mt-8">
            <div class="mx-auto max-w-xs">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                        <input
                            class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                            name="name"
                            type="name"
                            placeholder="Name"
                            required
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <input
                            class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-10"
                            name="telephone"
                            type="telephone"
                            placeholder="Telephone"
                            required
                        />
                        <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                        <input
                            class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-10"
                            name="email"
                            type="email"
                            placeholder="Email"
                            required
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <input
                            class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-10"
                            name="password"
                            type="password"
                            placeholder="Password"
                            required
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <input
                            class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-10"
                            name="password_confirmation"
                            type="password"
                            placeholder="Password Confirmation"
                            required
                        />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        <button
                            type="submit"
                            class="mt-20 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"
                        >
                        <svg
                          class="w-6 h-6 -ml-2"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                          <circle cx="8.5" cy="7" r="4" />
                          <path d="M20 8v6M23 11h-6" />
                        </svg>
                        <span class="ml-3">
                          Sign Up
                        </span>
                      </button>
                </form>
            </div>
          </div>
        </div>
      </div>
      <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
        <div
          class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
          style="background-image: url('{{ asset('images/lgn.svg') }}');"
        ></div>
      </div>
    </div>

@endsection