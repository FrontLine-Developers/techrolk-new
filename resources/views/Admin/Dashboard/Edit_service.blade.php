@include ('admin.Dashboard.tech_header')

<body class="wysihtml5-supported">
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12">
                <div id="showimages"></div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="color: black;">Add New Service</h3>
                    </div>
                    <div class="panel-body">
                        <form class="image-upload" method="post" action="{{url('/Edit-services',$book->id )}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$book->name}}" required/>
                            </div>  
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="textarea" style="width: 730px; height: 200px" required>{!! $book->description !!}</textarea>
                            </div>  
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" accept=".jpg, .jpeg, .png, .webp" class="form-control" >
                                @if ($book->image)
                                    <input type="text" value="{{ $book->image }}" readonly>
                                @else
                                    <input type="text" value="No file chosen" readonly>
                                @endif
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Edit</button>
                                <a href="{{url('dashboard/services')}}" class="btn btn-info btn-sm">Back</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; FrontLine Developers 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/wysihtml5-0.3.0.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/jquery-1.7.2.min.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/prettify.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/bootstrap.min.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//src/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('.textarea').wysihtml5();
        });
    </script>
</body>
</html>