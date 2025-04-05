<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('student') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Student Information</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ session('name') }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item" id="dashboard">
                    <a href="{{ route('dashboard') }}" class="nav-link" id="dashboard_link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item" id="student_management">
                    <a href="#" class="nav-link" id="student_management_link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Student Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('student') }}" class="nav-link" id="student_link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Profiles</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" id="course_class_management">
                    <a href="#" class="nav-link" id="course_class_management_link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Course & Class Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('yearlevel') }}" class="nav-link" id="yearlevel_link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>YearLevel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('course') }}" class="nav-link" id="course_link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Course</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subject') }}" class="nav-link" id="subject_link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subject</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('class_schedule') }}" class="nav-link" id="class_schedule_link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Class Schedule</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" id="teacher_management">
                    <a href="#" class="nav-link" id="teacher_management_link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Teacher Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('teacher') }}" class="nav-link" id="teacher_link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teacher Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('course_assignee') }}" class="nav-link" id="course_assignee_link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Course Assignee</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>