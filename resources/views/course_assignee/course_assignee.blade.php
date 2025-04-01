<x-layout>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Course Assignee</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('teacher') }}" class="text-secondary">Teacher Profile</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('course_assignee') }}">Course Assignee</a></li>
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
                                <h3 class="card-title">LIST OF COURSE ASSIGNEE(S)</h3>
                                <div class="float-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add"><i
                                            class="fas fa-plus-circle"></i> Add
                                        Course Assignee</button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Teacher Name</th>
                                            <th>Course Assignee</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Joseph Jett T. Abela</td>
                                            <td>BSIS</td>
                                            <td class="py-0 align-middle">
                                                <div class="btn-group btn-group-md">
                                                    <a href="#" class="btn btn-primary edit"
                                                        data-toggle="modal" data-target="#modal-edit"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger edit"
                                                        data-toggle="modal" data-target="#modal-status"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Aljoe Anthony Berden</td>
                                            <td>BSIS</td>
                                            <td class="py-0 align-middle">
                                                <div class="btn-group btn-group-md">
                                                    <a href="#" class="btn btn-primary edit"
                                                        data-toggle="modal" data-target="#modal-edit"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger edit"
                                                        data-toggle="modal" data-target="#modal-status"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
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
                    <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add Course Assignee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Teacher</label>
                            <select class="form-control" id="teacher" name="teacher" required>
                                <option value="" selected disabled>Select Teacher</option>
                                <option value="">Joseph Jett T. Abela</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <select class="form-control" id="course" name="course" required>
                                <option value="" selected disabled>Select Course</option>
                                <option value="">BSIS</option>
                            </select>
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
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Course Assignee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <div class="form-group">
                            <label>Teacher</label>
                            <select class="form-control" id="teacher" name="teacher" required>
                                <option value="" selected disabled>Select Teacher</option>
                                <option value="">Joseph Jett T. Abela</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <select class="form-control" id="course" name="course" required>
                                <option value="" selected disabled>Select Course</option>
                                <option value="">BSIS</option>
                            </select>
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
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Delete Course Assignee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <input class="form-control" type="text" name="status" id="status" hidden readonly>
                        <p>Are you sure you want to delete this course assignee?</p>
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
        $("#course_assignee_link").addClass("active");
        $("#teacher_management").addClass("menu-open");
        $("#teacher_management_link").addClass("active");

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
                    $('#e_course').val(data.course);
                    $('#status').val(data.status);
                }
            });

        });
    </script>
</x-layout>