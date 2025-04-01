<x-layout>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Subject</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('yearlevel') }}" class="text-secondary">YearLevel</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('course') }}" class="text-secondary">Course</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('subject') }}">Subject</a></li>
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
                                <h3 class="card-title">LIST OF SUBJECT(S)</h3>
                                <div class="float-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add"><i
                                            class="fas fa-plus-circle"></i> Add
                                        Subject</button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Subject Code</th>
                                            <th>Subject</th>
                                            <th>Units</th>
                                            <th>Assign Course</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>IS 109</td>
                                            <td>Software Engineering</td>
                                            <td>5</td>
                                            <td>BSIS</td>
                                            <td>Active</td>
                                            <td class="py-0 align-middle">
                                                <div class="btn-group btn-group-md">
                                                    <a href="#" class="btn btn-primary edit"
                                                        data-toggle="modal" data-target="#modal-edit"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-edit"></i> Edit</a>
                                                    <a href="#" class="btn btn-danger edit"
                                                        data-toggle="modal" data-target="#modal-status"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-check"></i>
                                                        Active</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>IS 109</td>
                                            <td>Software Engineering</td>
                                            <td>5</td>
                                            <td>BSIS</td>
                                            <td>Active</td>
                                            <td class="py-0 align-middle">
                                                <div class="btn-group btn-group-md">
                                                    <a href="#" class="btn btn-primary edit"
                                                        data-toggle="modal" data-target="#modal-edit"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-edit"></i> Edit</a>
                                                    <a href="#" class="btn btn-danger edit"
                                                        data-toggle="modal" data-target="#modal-status"
                                                        data-id=""
                                                        data-path=""><i
                                                            class="fas fa-times"></i>
                                                        Inactive</a>
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
                    <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add Subject</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="subject_code">Subject Code: </label>
                            <input type="number" class="form-control" id="subject_code" name="subject_code"
                                placeholder="Enter Subject Code" required>
                        </div> 
                        <div class="form-group">
                            <label for="subject">Subject: </label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="units">Units: </label>
                            <input type="number" class="form-control" id="units" name="units"
                                placeholder="Enter Units" required>
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
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Subject</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <div class="form-group">
                            <label for="subject_code">Subject Code: </label>
                            <input type="number" class="form-control" id="e_subject_code" name="subject_code"
                                placeholder="Enter Subject Code" required>
                        </div> 
                        <div class="form-group">
                            <label for="subject">Subject: </label>
                            <input type="text" class="form-control" id="e_subject" name="subject"
                                placeholder="Enter Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="units">Units: </label>
                            <input type="number" class="form-control" id="e_units" name="units"
                                placeholder="Enter Units" required>
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <select class="form-control" id="e_course" name="course" required>
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
                        <p>Are you sure you want to update the status of this subject?</p>
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
        $("#subject_link").addClass("active");
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
                    $('#e_course').val(data.course);
                    $('#status').val(data.status);
                }
            });

        });
    </script>
</x-layout>
