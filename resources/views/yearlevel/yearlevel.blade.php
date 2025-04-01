<x-layout>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>YearLevel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('yearlevel') }}">YearLevel</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('course') }}" class="text-secondary">Course</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('subject') }}" class="text-secondary">Subject</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('class_schedule') }}" class="text-secondary">Class Schedule</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">LIST OF YEARLEVEL(S)</h3>
                                <div class="float-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add"><i
                                            class="fas fa-plus-circle"></i> Add
                                        YearLevel</button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>YearLevel</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($yearlevel as $item)
                                            <tr>
                                                <td>{{ $item['id'] }}</td>
                                                <td>{{ $item['year_level'] }}</td>
                                                <td>{{ $item['status'] == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td class="py-0 align-middle">
                                                    <div class="btn-group btn-group-md">
                                                        <a href="#" class="btn btn-primary edit"
                                                            data-toggle="modal" data-target="#modal-edit"
                                                            data-id="{{ $item['id'] }}"
                                                            data-path="{{ route('yearleveledit') }}"><i
                                                                class="fas fa-edit"></i> Edit</a>
                                                        @if ($item['status'] == 1)
                                                            <a href="#" class="btn btn-danger edit"
                                                                data-toggle="modal" data-target="#modal-status"
                                                                data-id="{{ $item['id'] }}"
                                                                data-path="{{ route('yearleveledit') }}"><i
                                                                    class="fas fa-times"></i>
                                                                Inactive</a>
                                                        @else
                                                            <a href="#" class="btn btn-danger edit"
                                                                data-toggle="modal" data-target="#modal-status"
                                                                data-id="{{ $item['id'] }}"
                                                                data-path="{{ route('yearleveledit') }}"><i
                                                                    class="fas fa-check"></i>
                                                                Active</a>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add YearLevel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="{{ route('yearlevelstore') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="yearLevel">YearLevel</label>
                            <input type="number" class="form-control" id="yearLevel" name="yearLevel"
                                placeholder="Enter Year Level" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit <i class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade modal-close" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit YearLevel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="{{ route('yearlevelupdate') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <div class="form-group">
                            <label for="e_yearLevel">YearLevel</label>
                            <input type="number" class="form-control" id="e_yearLevel" name="yearLevel"
                                placeholder="Enter Year Level" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit <i
                                class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade modal-close" id="modal-status">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="{{ route('yearleveldestroy') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <input class="form-control" type="text" name="status" id="status" hidden readonly>
                        <p>Are you sure you want to update the status of this yearlevel?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes <i
                                class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script>
        $("#yearlevel_link").addClass("active");
        $("#course_class_management").addClass("menu-open");
        $("#course_class_management_link").addClass("active");

        $('.edit').on('click', function(e) {
            const id = $(this).attr('data-id');
            const path = $(this).attr('data-path');

            $.ajax({
                type: "GET",
                cache: false,
                url: path,
                data: {
                    id: id
                },
                success: function(data) {
                    $(".e_id").val(data.id);
                    $('#e_yearLevel').val(data.year_level);
                    $('#status').val(data.status);
                }
            });

        });
    </script>
</x-layout>
