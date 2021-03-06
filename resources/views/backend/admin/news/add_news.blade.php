<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Add News')
    @include('backend.layouts.includes.htmlheader')
@show

<body class="skin-yellow sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'Add News')
    @section('contentheader_message', 'Add News')
        @include('backend.layouts.partials.contentheader')
        
        <!-- Main content -->

        <br>
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-warning">
                 <div class="register-logo">
                    <b>Form Add News</b>
                </div>
                <!-- /.box-header -->
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif

                <!-- form start -->
                <form action="{{ url('news') }}" method="post" >
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label>Keyword Search</label>
                      <input class="form-control" type="text" name="keyword" placeholder="Enter the keyword search...">
                    </div>
                    <div class="form-group">
                      <label>News Category</label>
                       <select class="form-control select2" name="category" style="width: 100%;">
                        <option selected="selected">Umum</option>
                        <option>Kesehatan</option>
                        <option>Pendidikan</option>
                        <option>Ekonomi</option>
                        <option>Politik</option>
                        <option>Bisnis</option>
                        <option>Otomotif</option>
                        <option>Teknologi</option>
                        <option>Games</option>
                        <option>Olahraga</option>
                        <option>Music</option>
                        <option>Movie</option>
                        <option>Lifestyle</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Type</label>
                       <select class="form-control select2" name="type" style="width: 100%;">
                        <option selected="selected">Valid</option>
                        <option>Hoax</option>
                      </select>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </section>
        <!-- main content -->

    </div><!-- /.content-wrapper -->

    @include('backend.layouts.partials.controlsidebar')

    @include('backend.layouts.includes.footer')

</div><!-- ./wrapper -->
@section('scripts')
    @include('backend.layouts.includes.scripts')
@show

  

</body>
</html>
