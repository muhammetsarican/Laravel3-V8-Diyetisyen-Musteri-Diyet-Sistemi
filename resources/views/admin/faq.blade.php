@extends('layouts.admin')
@section('title','FAQ List')
@section('content')
    <!-- Content Wrapper -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>FAQ</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_faq')}}">Home</a> </li>
                            <li class="breadcrumb-item active">FAQ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <a href="{{route('admin_faq_add')}}" class="btn btn-black--hover btn-info">Add FAQ</a>
                    </div>

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">FAQ's</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Position</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $dl)
                                    <tr>
                                        <td>{{$dl->id}}</td>
                                        <td>
                                            {{$dl->position}}
                                        </td>
                                        <td>{{$dl->question}}</td>
                                        <td>{!! $dl->answer !!}</td>
                                        <td>{{$dl->status}}</td>
                                        <td><a href="{{route('admin_faq_edit',['id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                        <td><a href="{{route('admin_faq_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection




