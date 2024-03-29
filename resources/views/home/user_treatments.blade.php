@extends('layouts.home')
@section('title','User Treatments')



@section('description')
@endsection

@section('keywords','boş')

@section('content')
    <div class="overlay" style="background-image: url('{{asset('assets')}}/images/slider_10.jpg');height: 300px">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <p style="margin-top: 150px"><h1 class="heading mb-3 text-white">User Treatments</h1></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Title(s)</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Image Gallery</th>
                                            <th>Status</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $dl)
                                            <tr>
                                                <td>{{$dl->id}}</td>
                                                <td>
                                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($dl->category,$dl->category->title)}}
                                                </td>
                                                <td>{{$dl->title}}</td>
                                                <td>{{$dl->price}}</td>
                                                <td>
                                                    @if($dl->image)
                                                        <img src="{{\Illuminate\Support\Facades\Storage::url($dl->image)}}" height="50" alt="">
                                                    @endif
                                                </td>
                                                <td><a href="{{route('user_image_add',['treatment_id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img src="{{asset('adminassets/icons/image-gallery.png')}}" height="25px"></a></td>
                                                <td>{{$dl->status}}</td>
                                                <td><a href="{{route('user_treatment_edit',['id'=>$dl->id])}}"><img src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                                <td><a href="{{route('user_treatment_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="card-header">
                                        <div class="card-title">
                                            <a href="{{route('user_treatment_add')}}" class="btn btn-black--hover btn-info">Add
                                                Treatment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
