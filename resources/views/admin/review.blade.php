@extends('layouts.admin')
@section('title','Review List')
@section('content')
        <!-- Main Content -->
        <div id="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Reviews</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Name</th>
                                    <th>Treatment</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $dl)
                                    <tr>
                                        <td>{{$dl->id}}</td>
                                        <td><a href="{{route('admin_user_show',['id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">{{$dl->user->name}}</a></td>
                                        <td><a href="{{route('treatment',['id'=>$dl->treatment_id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">{{$dl->treatment->title}}</a></td>
                                        <td>{{$dl->subject}}</td>
                                        <td>{{$dl->status}}</td>
                                        <td><a href="{{route('admin_review_edit',['id'=>$dl->id])}}" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')"><img src="{{asset('adminassets/icons/edit.png')}}" height="25px"></a></td>
                                        <td><a href="{{route('admin_review_delete',['id'=>$dl->id])}}" onclick="return confirm('Delete! Are you sure ?')"><img src="{{asset('adminassets/icons/trash.png')}}" height="25px"></a></td>
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




