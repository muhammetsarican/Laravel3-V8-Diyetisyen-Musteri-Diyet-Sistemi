<html>
<head>
    <link rel="shortcut icon" href="{{asset('adminassets/icons/user.png')}}" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="{{asset('adminassets')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="{{asset('adminassets')}}/stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('adminassets')}}/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<body>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <div class="card">
            <div class="card-header">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit FAQ</h6>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="position" value="{{$data->position}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Question</label>
                                <input type="text" name="question" value="{{$data->question}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea id="summernote" class="form-control"
                                          name="answer">{{$data->answer}}</textarea>
                                <script>
                                    $(document).ready(function () {
                                        $('#summernote').summernote();
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update FAQ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
