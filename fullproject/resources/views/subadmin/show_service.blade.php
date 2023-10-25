@extends('dashboard')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-12"> @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                           <strong>{{session('success')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
        @endif
                        <div class="bg-secondary rounded h-100 p-4 ">
                            <div class=" d-flex justify-content-between ">

                                <h6 class="mb-4">Service show</h6>
                                <button class="btn btn-sm btn-successs">
                                <a href="{{route('desh.createservice')}}" class="btn btn-sm btn-success d-flex justify-content-center align-items-center   "><i class="fa fa-user"></i></a>
                                </button>
                                
                            </div>
                            <div class="table-responsive ">
                                <table class="table ">
                                    <thead class="">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Photo</th>
                                            <div class="d-flex justify-content-center align-items-center  ">

                                                <th scope="col" class="mx-auto">Action</th>
                                            </div>
        
                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $page=@$_GET['page'];
                                        if(!$page){
                                            $page = 1;
                                        }
                                        $i=config('app.row')*($page-1)+1;
                                        ?>
                                        @foreach($service as $c)
                                            <tr class="">
                                                <td>{{$i++}}</td>
                                                <td>{{$c->title}}</td>
                                                <td>{{$c->description}}</td>
                                                
                                                <td>
                                                    <img src="{{asset($c->photo)}}" alt="" width="50px" height="50px">
                                                </td>
                                                <td class="">
                                               
                                                    <a href="{{url('desh/deleteservice/'.$c->id)}}" class="btn mt-2 btn-sm btn-danger" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
                                                    <a href="{{url('desh/editservice/'.$c->id)}}"  class="btn btn-sm btn-warning mt-2" onclick="confirm(event)"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('desh/editservice/'.$c->id)}}" data-bs-target="#exampleModal"  class=" mt-2 btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                                </td>
                                                <td>
                                    
                                                </td>
                                            </tr>
                                            @endforeach

                                    </tbody>
                                </table>
                                {{$service->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!--Start Model edit-->
            <!--end model edit-->
@endsection
@section('js')
            <script type="text/javascript">
                $("document").ready(function(){
                    setTimeout(() => {
                        $("#alert").remove();
                    }, 3000);
                })

                function confirmation(ev){
                    ev.preventDefault();
                    var urlToRedirect=ev.currentTarget.getAttribute('href');

                    console.log(urlToRedirect);

                    swal({
                        title:"Are you Sure to delete this",
                        text:"You won't be able to revert this delete",
                        icon:"warning",
                        buttons:true,
                        dangerMode:true,
                    })

                    .then((willCancel)=>
                    {
                        if(willCancel){
                            window.location.href=urlToRedirect;
                        }
                    });
                }

             

                
                
                /*
                
                */
            </script>
            @endsection