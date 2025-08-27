@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="text-2xl">register</div>

    <h2 class="text-2xl text-center font-semibold mt-10">Please fill in the form</h2>
    <div class="">
      <form action="/register" method="POST" class="wrapper mt-5 mx-auto max-w-md">
          @csrf
          <div class="grid grid-cols-1 gap-5">
              
              <div class="">
                <input type="text" class="border border-orange-200 w-full p-2 rounded-md" id="name" name="name" placeholder="Name">
              </div>
              <div class="">
                <input type="email" class="border border-orange-200 w-full p-2 rounded-md" id="email" name="email" placeholder="Email">
              </div>
              <div class="">
                <input type="password" class="border border-orange-200 w-full p-2 rounded-md" id="password" name="password" placeholder="Passwort">
              </div>
                                   
            <button type="submit" class="px-5 py-2 rounded-full bg-orange-600 hover:bg-orange-700 text-slate-200 transition ease-in-out duration-500">Senden</button>
          </div> 
        
      </form>
    </div>
@endsection