<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> --}}
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="row  bg-white rounded-md shadow-md dark:bg-dark-eval-1">

            <div class="col-lg-2   ">
             {{-- @include('include.aside') --}}
            </div>
            <!-- /.col-lg-3 -->
        
            <div class="col-lg-9">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissable m-3">
                        {{session('success')}}
                    </div>
                    
                @endif
              <!-- /.card -->
        
              <div class="card card-outline-secondary my-4  bg-white rounded-md shadow-md dark:bg-dark-eval-1">
                <div class="card-header">
                  Ajouter un article
                </div>
                <div class="card-body">
                    <form action="{{route('store')}}" method="POST"enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{old('titre')}}">
                            @error('titre')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                              <label for="content">Contenu</label>
                              <textarea class="form-control tinymce-editor " id="content" name="content" cols="30" rows="5" value={{old('content')}}>{{old('content')}}</textarea>
                              @error('content')
                              <div class="text-danger">{{ $message }}
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="file">Image</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
                            @error('content')
                            <div class="text-danger">{{ $message }}
                            @enderror
                          </div>
        
                        <button type="submit " class="btn btn-primary mt-4">Ajouter</button>
                      </form>
                      
                </div>
               
              </div>
              <!-- /.card -->
        
            </div>
            <!-- /.col-lg-9 -->
        
          </div>
        
        </div>
        
        <script>
        
        
        document.addEventListener('DOMContentLoaded', function() {
          tinymce.init({
            selector: '.tinymce-editor',
            plugins: 'advlist link image',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | link image',
          });
        });
        
        </script>
        
    </div>
    
</x-app-layout>
