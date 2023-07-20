<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
          <x-button target="" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="red"
                class="justify-center max-w-xs gap-2">
                {{-- <x-icons.github class="w-6 h-6" aria-hidden="true" /> --}}
                <span>Star on Github</span>
            </x-button> 
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <table class="table table-striped">

            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">titre</th>
                <th scope="col">content</th>
                <th scope="col">option</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($blogs as $blog)
                
              <tr>
                <th scope="row">{{$blog->id}}</th>
                <td><img src="{{asset('images/'.$blog->image)}}" class="card-img-top" style="width: 80px; height: 80px; object-fit: cover;" alt="..."></td>
                <td>{{$blog->titre}}</td>
                <td>  {{Str::limit(htmlspecialchars_decode(strip_tags($blog->content)), 50)}}</td>
                <td><a href="{{route('blog.show', $blog->id)}}" class="btncol-md-3" style="margin-top: auto;"><i class="fas fa-eye" style="color: rgb(0, 0, 0) ;width: 30px;height: 30px"></i></a></td>
              </tr>
             @endforeach
            </tbody>
          </table>
        
    </div>
    
</x-app-layout>
