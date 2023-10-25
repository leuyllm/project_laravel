
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">
        <form action="{{url('update_item')}}" method="post" enctype="multipart/form-data" >
            @csrf
          <div class="mb-2">
            <label for="name" class="col-form-label">Name of food <span class="text-danger"> *</span></label>
            <input type="text" class="form-control" id="name" name="name" require autofocus value="{{$item->name}}">
          </div>
          <div class="mb-2">
            <label for="price" class="col-form-label">Price <span class="text-danger"> *</span></label>
            <input type="text" class="form-control" id="price" name="price" require autofocus value="{{$item->price}}">
          </div>
          <div class="mb-2">
            <label for="desc" class="col-form-label">Description <span class="text-danger"> *</span></label>
          <textarea class="form-control" require placeholder="Leave a comment here" name="description"
                                    id="description" style="height: 70px;">{{$item->description}}</textarea>                    
          </div>
          <div class="mb-2">
          <label for="price" class="col-form-label">Image<span class="text-danger">*</span></label>
          <input type="file" class="form-control" id="photo" name="photo" require autofocus>
          <p class="mt-2">
            <img src="{{asset($item->photo)}}" width="100" alt="">
          </p>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
-->


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
        <form action="{{route('desh.update')}}" method="post" enctype="multipart/form-data" >
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
                    <a href="{{route('desh.show')}}" class="btn btn-warning btn-sm btn-oval">
                        <i class="fa fa-reply"></i> Back
                    </a>
                </div>
                <div class="card-block">
                    <div class="row g-4">
                    <input type="hidden" name="id" value="{{$item->id}}">
                        <div class="col-sm-7">
                            <div class="form-group row mb-3">
                                <label for="name" class="col-sm-3">Name <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$item->name}}" id="name" name="name" require autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="price" class="col-sm-3">Price <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="price" name="price" require autofocus value="{{$item->price}}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="name" class="col-sm-3">Description <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                <textarea class="form-control" require placeholder="Leave a comment here" name="description"
                                    id="description" style="height: 150px;">{{$item->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="form-group row">
                                <label for="price" class="col-sm-3">Image<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="photo" name="photo" require autofocus>
                                    <p class="mt-2">
                                      <img src="{{asset($item->photo)}}" width="100" alt="">
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

