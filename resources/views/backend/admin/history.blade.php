<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'History Pencarian')
    @include('backend.layouts.includes.htmlheader')
@show

<body class="skin-blue sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'History Pencarian')
    @section('contentheader_message', 'History Pencarian')
        @include('backend.layouts.partials.contentheader')
        
        <!-- Main content -->

        <br>
        <!-- Main content -->
        <section class="content">
          {{-- @include('layouts.includes._message') --}}
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">History Pencarian</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kata Pencarian</th>
                      <th>Valid</th>
                      <th>Hoax</th>
                      <th>Unknown</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $index => $history)       
                      <tr>
                        <td>{{ $index +1 }}</td>
                        <td>{{ $history->kata }}</td>
                        <td>{{ $history->valid }} %</td>
                        <td>{{ $history->hoax }} %</td>
                        <td>{{ $history->unknown }} %</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->

    </div><!-- /.content-wrapper -->

    @include('backend.layouts.partials.controlsidebar')

    @include('backend.layouts.includes.footer')

</div><!-- ./wrapper -->
@section('scripts')
    @include('backend.layouts.includes.scripts')
@show
  
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
</script>

</body>
</html>