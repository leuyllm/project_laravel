


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
        <form action="{{route('desh.updateservice')}}" method="post" enctype="multipart/form-data" >
        @csrf
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
            <h6 class="mb-3"> Edit Menu</h6>
                <div class="toolbox mb-3">
                  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-update"></i>Update</button>
                    <a href="{{route('desh.showservice')}}" class="btn btn-warning btn-sm btn-oval">
                        <i class="fa fa-reply"></i> Back
                    </a>
                </div>
                <div class="card-block">
                    <div class="row g-4">
                    <input type="hidden" name="id" value="{{$service->id}}">
                        <div class="col-sm-7">
                            <div class="form-group row mb-3">
                                <label for="name" class="col-sm-3">Title<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$service->title}}" id="title" name="title" require autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="name" class="col-sm-3">Description <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                <textarea class="form-control" require placeholder="Leave a comment here" name="description"
                                    id="description" style="height: 150px;">{{$service->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="form-group row">
                                <label for="price" class="col-sm-3">Image<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="photo" name="photo" require autofocus>
                                    <p class="mt-2">
                                      <img src="{{asset($service->photo)}}" width="100" alt="">
                                    </p>
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
                
            </script>
            @endsection

