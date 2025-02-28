<x-layout>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Student</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('student') }}">Student</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('course') }}" class="text-secondary">Course</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('yearlevel') }}"
                                    class="text-secondary">YearLevel</a></li>
                        </ol>
                    </div>
                </div>
                <form action="{{ route('studentshow') }}" method="GET">
                    @csrf
                    <div class="row mt-3">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Course</label>
                                    <select class="form-control" name="course_id" required>
                                        <option value="" selected disabled>Select Course</option>
                                        @foreach ($course_all as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['course'] }}</option>
                                        @endforeach
                                        <option value="All">All Course</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <label>YearLevel</label>
                                <div class="form-group">
                                    <select class="form-control" name="year_level_id" required>
                                        <option value="" selected disabled>Select Year Level</option>
                                        @foreach ($yearlevel_all as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['year_level'] }}</option>
                                        @endforeach
                                        <option value="All">All Year Level</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 d-flex justify-content-start align-items-center mt-3">
                                <button type="submit" class="btn btn-success" style="width: 100%"><i class="fas fa-filter"></i>
                                    Filter</button>
                            </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">LIST OF STUDENT(S)</h3>
                                <div class="float-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add"><i
                                            class="fas fa-plus-circle"></i> Add
                                        Student</button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>YearLevel</th>
                                            <th>Course</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($student as $item)
                                            <tr>
                                                <td>{{ $item['student_id'] }}</td>
                                                <td>{{ $item['first_name'] }} {{ $item['last_name'] }}</td>
                                                <td>{{ $item['year_level'] }}</td>
                                                <td>{{ $item['course'] }}</td>
                                                <td class="py-0 align-middle">
                                                    <div class="btn-group btn-group-md">
                                                        <a href="#" class="btn btn-info edit" data-toggle="modal"
                                                            data-target="#modal-view"
                                                            data-id="{{ $item['student_id'] }}"
                                                            data-path="{{ route('studentedit') }}"><i
                                                                class="fas fa-eye"></i></a>
                                                        <a href="#" class="btn btn-primary edit"
                                                            data-toggle="modal" data-target="#modal-edit"
                                                            data-id="{{ $item['student_id'] }}"
                                                            data-path="{{ route('studentedit') }}"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="#" class="btn btn-danger edit"
                                                            data-toggle="modal" data-target="#modal-status"
                                                            data-id="{{ $item['student_id'] }}"
                                                            data-path="{{ route('studentedit') }}"><i
                                                                class="fas fa-trash"></i></a>
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
                    <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="{{ route('studentstore') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                placeholder="Enter First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name"
                                placeholder="Enter Middle Name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                placeholder="Enter Last Name" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="" selected disabled>Select Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Enter Address" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age"
                                placeholder="Enter Age" required>
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <select class="form-control" id="course" name="course" required>
                                <option value="" selected disabled>Select Course</option>
                                @foreach ($course as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['course'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>YearLevel</label>
                            <select class="form-control" id="year_level" name="year_level" required>
                                <option value="" selected disabled>Select YearLevel</option>
                                @foreach ($yearlevel as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['year_level'] }}</option>
                                @endforeach
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

    <div class="modal fade modal-close" id="modal-view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input class="form-control e_id" type="text" name="id" hidden readonly>
                    <div class="form-group">
                        <label for="e_first_name">First Name</label>
                        <input type="text" class="form-control e_first_name" id="e_first_name" name="first_name"
                            placeholder="Enter First Name" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="e_middle_name">Middle Name</label>
                        <input type="text" class="form-control e_middle_name" id="e_middle_name"
                            name="middle_name" placeholder="Enter Middle Name" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="e_last_name">Last Name</label>
                        <input type="text" class="form-control e_last_name" id="e_last_name" name="last_name"
                            placeholder="Enter Last Name" required disabled>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control e_gender" id="e_gender" name="gender" required disabled>
                            <option value="" selected disabled>Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="e_address">Address</label>
                        <input type="text" class="form-control e_address" id="e_address" name="address"
                            placeholder="Enter Address" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="e_age">Age</label>
                        <input type="number" class="form-control e_age" id="e_age" name="age"
                            placeholder="Enter Age" required disabled>
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <select class="form-control e_course" id="e_course" name="course" required disabled>
                            <option value="" selected disabled>Select Course</option>
                            @foreach ($course as $item)
                                <option value="{{ $item['id'] }}">{{ $item['course'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>YearLevel</label>
                        <select class="form-control e_year_level" id="e_year_level" name="year_level" required
                            disabled>
                            <option value="" selected disabled>Select YearLevel</option>
                            @foreach ($yearlevel as $item)
                                <option value="{{ $item['id'] }}">{{ $item['year_level'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
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
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="formPost" action="{{ route('studentupdate') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <div class="form-group">
                            <label for="e_first_name">First Name</label>
                            <input type="text" class="form-control e_first_name" id="e_first_name"
                                name="first_name" placeholder="Enter First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="e_middle_name">Middle Name</label>
                            <input type="text" class="form-control e_middle_name" id="e_middle_name"
                                name="middle_name" placeholder="Enter Middle Name" required>
                        </div>
                        <div class="form-group">
                            <label for="e_last_name">Last Name</label>
                            <input type="text" class="form-control e_last_name" id="e_last_name" name="last_name"
                                placeholder="Enter Last Name" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control e_gender" id="e_gender" name="gender" required>
                                <option value="" selected disabled>Select Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="e_address">Address</label>
                            <input type="text" class="form-control e_address" id="e_address" name="address"
                                placeholder="Enter Address" required>
                        </div>
                        <div class="form-group">
                            <label for="e_age">Age</label>
                            <input type="number" class="form-control e_age" id="e_age" name="age"
                                placeholder="Enter Age" required>
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <select class="form-control e_course" id="e_course" name="course" required>
                                <option value="" selected disabled>Select Course</option>
                                @foreach ($course as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['course'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>YearLevel</label>
                            <select class="form-control e_year_level" id="e_year_level" name="year_level" required>
                                <option value="" selected disabled>Select YearLevel</option>
                                @foreach ($yearlevel as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['year_level'] }}</option>
                                @endforeach
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
                <form class="formPost" action="{{ route('studentdestroy') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control e_id" type="text" name="id" hidden readonly>
                        <p>Are you sure you want to delete this student?</p>
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
        $("#student_link").addClass("active");

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
                    $('.e_first_name').val(data.first_name);
                    $('.e_middle_name').val(data.middle_name);
                    $('.e_last_name').val(data.last_name);
                    $('.e_gender').val(data.gender);
                    $('.e_address').val(data.address);
                    $('.e_age').val(data.age);
                    $('.e_course').val(data.course_id);
                    $('.e_year_level').val(data.year_level_id);
                }
            });

        });
    </script>

</x-layout>
