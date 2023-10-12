@extends('layout.app')
@section('content')

<div class="text-lg font-semibold text-center whitespace-nowrap dark:text-white m-8">
  @if (session('success'))
            <div class="alert alert-success alert-dismissable m-3">
                {{session('success')}}
            </div>
    @elseif (session('error'))
            <div class="alert alert-danger alert-dismissable m-3">
                {{session('error')}}
            </div>
    @endif
    Evaluation
</div>
<div class="flex justify-center items-center p-4 " style="background-color: rgba(47, 48, 47, 0.082)">



    <form class="w-full max-w-lg" action="{{ route('evaluation.voiture') }}" method="POST">
      @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Email
            </label>
            <input  name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="email">
            @error('email')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Marque
            </label>
            <input  name="marque" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Marque">
            @error('marque')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Model
               </label>
               <input name="model" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Model">
               @error('model')
               <div class="alert alert-danger" role="alert">
                 {{ $message }}
               </div>
               @enderror
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Année
              </label>
              <input name="annee" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="number" placeholder="année">
              @error('annee')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
              @enderror
          </div>
          {{-- <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             Model
            </label>
            <input name="model" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Model">
            @error('model')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div> --}}

        </div>
        {{-- <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Année
            </label>
            <input name="annee" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="number" placeholder="année">
            @error('annee')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div> --}}
        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
            Boite de vitesse
            </label>
            <select name="carburant" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option>Manuelle</option>
              <option>Automatique</option>

            </select>
            @error('carburant')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
              Type de Carburant
            </label>
            <div class="relative">
              <select name="boite" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="essance">essance</option>
                <option value="diesel">diesel</option>

              </select>
              @error('boite')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
              @enderror
              {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div> --}}
            </div>
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
               Kilométrage
            </label>
            <input name="kilometre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" placeholder="km">
            @error('kilometre')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>

        </div>
        <button type="submit" class="btn btn-primary text-black">envoyer</button>
      </form>
</div>

@endsection
