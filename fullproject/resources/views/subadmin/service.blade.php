@extends('dashboard')
@section('css')
<style>
    .r{
        display:flex;
        justify-content:center;
        align-items:center;
        padding: 10px;
    }
</style>
@endsection
@section('content')
        <!--Test-->
        <div class="container-fluid pt-4 px-4">
        <form action="{{route('desh.saveservice')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <!--{{$errors}}-->
      
 
        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                           <strong>{{session('success')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    
        @endif
        @if(Session::has('error'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert" id="alert">
                           <strong>{{session('error')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    
         @endif
            <div class="bg-secondary rounded h-100 p-4 card card-block">
            <h6 class="mb-3">Service</h6>
                <div class="toolbox mb-3">
                    <button class="btn btn-primary btn-sm btn-oval">
                        <i class="fa fa-save"></i> Save
                    </button>
                    <a href="" class="btn btn-warning btn-sm btn-oval">
                        <i class="fa fa-reply"></i> Back
                    </a>
                </div>
                <div class="card-block">
                    <div class="row g-4">
                    
                        <div class="col-sm-7">
                            <div class="form-group row mb-3">
                                <label for="title" class="col-sm-3">Title<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" require autofocus value="{{old('name')}}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="name" class="col-sm-3">Description <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                <textarea class="form-control @error('description') is-invalid @enderror" require placeholder="Leave a comment here" name="description"
                                    id="description" style="height: 150px;"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="form-group row">
                                <label for="price" class="col-sm-3">Image<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="photo" name="photo" require autofocus value="{{old('photo')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
        </div>             
            @endsection
            @section('js')
            <script type="text/javascript">
                $("document").ready(function(){
                    setTimeout(() => {
                        $("#alert").remove();
                    }, 3000);
                })

                function confirm(ev){
                    ev.preventDefault();
                    var urlToRedirect=ev.currentTarget.getAttribute('href');

                    console.log(urlToRedirect);

                    swal({
                        title: "Data edit successful",
                        text: "Click the button ok",
                        icon: "success",
                        buttons:true,
                        
                    });

                }
            </script>
            @endsection
