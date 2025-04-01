<x-layout>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Teacher Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('teacher') }}">Teacher Profile</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('course_assignee') }}" class="text-secondary">Course Assignee</a></li>
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
                                <h3 class="card-title">LIST OF TEACHER PROFILE(S)</h3>
                                <div class="float-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add"><i
                                            class="fas fa-plus-circle"></i> Add
                                        Teacher Profile</button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Teacher Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Phone#</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Joseph Jett T. Abela</td>
                                            <td>Male</td>
                                            <td>BSIS</td>
                                            <td>Talibon Bohol</td>
                                            <td>09123456789</td>
                                            <td>Active</td>
                                            <td class="py-0 align-middle">
                                                <div class="btn-group btn-group-md">
                                                    <a href="#" class="btn btn-primary edit"
                                                        data-toggle="modal" data-target="#modal-edit"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-edit"></i> Edit</a>
                                                    <a href="#" class="btn btn-warning edit"
                                                        data-toggle="modal" data-target="#modal-status"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-check"></i>
                                                        Active</a>
                                                    <a href="#" class="btn btn-danger edit"
                                                        data-toggle="modal" data-target="#modal-delete"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-trash"></i> Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Aljoe Anthony Berden</td>
                                            <td>Male</td>
                                            <td>BSIS</td>
                                            <td>Talibon Bohol</td>
                                            <td>09123456789</td>
                                            <td>Inactive</td>
                                            <td class="py-0 align-middle">
                                                <div class="btn-group btn-group-md">
                                                    <a href="#" class="btn btn-primary edit"
                                                        data-toggle="modal" data-target="#modal-edit"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-edit"></i> Edit</a>
                                                    <a href="#" class="btn btn-warning edit"
                                                        data-toggle="modal" data-target="#modal-status"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-times"></i>
                                                        Inactive</a>
                                                    <a href="#" class="btn btn-danger edit"
                                                        data-toggle="modal" data-target="#modal-delete"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-trash"></i> Delete</a>
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
                    <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add Teacher</h4>
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
                            <label>Subject</label>
                            <select class="form-control" id="subject" name="subject" required>
                                <option value="" selected disabled>Select Subject</option>
                                <option value="">Software Engineering ( Course - BSIS )</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="time_start">Time Start: </label>
                            <input type="time" class="form-control" id="time_start" name="time_start"
                                placeholder="Enter Time Start" required>
                        </div>
                        <div class="form-group">
                            <label for="time_end">Time End: </label>
                            <input type="time" class="form-control" id="time_end" name="time_end"
                                placeholder="Enter Time End" required>
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
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Teacher</h4>
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
                            <label>Subject</label>
                            <select class="form-control" id="subject" name="subject" required>
                                <option value="" selected disabled>Select Subject</option>
                                <option value="">Software Engineering ( Course - BSIS )</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="time_start">Time Start: </label>
                            <input type="time" class="form-control" id="time_start" name="time_start"
                                placeholder="Enter Time Start" required>
                        </div>
                        <div class="form-group">
                            <label for="time_end">Time End: </label>
                            <input type="time" class="form-control" id="time_end" name="time_end"
                                placeholder="Enter Time End" required>
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
                <form class="formPost" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <input class="form-control" type="text" name="status" id="status" hidden readonly>
                        <p>Are you sure you want to update the status of this teacher?</p>
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

    <div class="modal fade modal-close" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Delete Teacher</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <input class="form-control" type="text" name="status" id="status" hidden readonly>
                        <p>Are you sure you want to delete this teacher?</p>
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
        $("#teacher_link").addClass("active");
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