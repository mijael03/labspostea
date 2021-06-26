@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row align-items-center h-100 ">
        <div class="card col-md-8 mx-auto">
            <img src="{{ Storage::url($post->image) }}" alt="..." class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $post->title}}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ $post->created_at}}
                </h6>
                <p class="card-text">
                    {{$post->content}}
                </p>
                <a href="{{ url('/')}}" class="card-link">Todas las publicaciones</a>
@auth                
                <textarea class="form-control"  placeholder="Comenta.." id="exampleFormControlTextarea1" rows="3"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    <div class="card col-md-8 mx-auto">
       <div class="card-body">
           <h5 class="card-title">
               Comentarios
           </h5>
           <p class="card-text">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam rerum distinctio accusantium ipsum, voluptatum exercitationem porro, nesciunt, quam cum voluptate quasi impedit eveniet aliquam neque vel? Deleniti corporis laborum repellat!
           </p>
       </div>
    </div>
@endauth   
    
    
</div>
@endsection