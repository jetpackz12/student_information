<x-head />

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-nav />
        <x-sidebar />
        <!-- Content Wrapper. Contains page content -->
        {{ $slot }}
        <x-footer />
    </div>
    <!-- ./wrapper -->

    <x-scripts />
</body>

</html>
