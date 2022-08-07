<!-- jQuery  -->
<script src="dash/assets/js/jquery.min.js"></script>
<script src="dash/assets/js/popper.min.js"></script>
<script src="dash/assets/js/bootstrap.min.js"></script>
<script src="dash/assets/js/modernizr.min.js"></script>
<script src="dash/assets/js/waves.js"></script>
<script src="dash/assets/js/jquery.slimscroll.js"></script>
<script src="dash/assets/js/jquery.nicescroll.js"></script>
<script src="dash/assets/js/jquery.scrollTo.min.js"></script>

<!-- Required datatable js -->
<script src="dash/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dash/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="dash/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="dash/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="dash/assets/plugins/datatables/jszip.min.js"></script>
<script src="dash/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="dash/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="dash/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="dash/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="dash/assets/plugins/datatables/buttons.colVis.min.js"></script>
<script src="dash/assets/plugins/datatables/dataTables.select.min.js"></script>
<!-- Responsive examples -->
<script src="dash/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="dash/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->

<!-- Primary School -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#pridata').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                  extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('pridata') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'school_branch', name: 'school_branch'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- PreSchool Data :: Data Processing -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#predata').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('predata') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'school_branch', name: 'school_branch'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- High School - Datatable Processing -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#highdata').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('highdata') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'school_branch', name: 'school_branch'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Kempton Park  - Datatable -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#kempton').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('kempton') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Pretoria Branch Sort -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#pretoria').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('pretoria') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Randburg Branch -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#randburg').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('randburg') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Midrand -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#midrand').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('midrand') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Germiston Branch Data -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#germiston').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('germiston') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- New Havard Data -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#newhavard').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('newhavard') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Roodepoort -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#roodepoort').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('roodepoort') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Hazyview -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#hazyview').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('hazyview') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Glendale Data -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#glendale').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('glendale') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Eastview -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#eastview').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('eastview') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- Johannesburg -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#jhb').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy'
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [1,2,3,4,5,6,7,8,9,10,11,12]
                    }
                },
                {
                    extend: 'csvHtml5'
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                    extend: 'colvis'
                },
                {
                    extend: 'print',
                    text: 'Export All',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true,
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('jhb') !!}',
            columns: [
                {data: 'id', name: 'id', selectRow: true,},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'childfirstname', name: 'childfirstname'},
                {data: 'childlastname', name: 'childlastname'},
                {data: 'grade', name: 'grade'},
                {data: 'enrol_type', name: 'enrol_type'},
                {data: 'startyear', name: 'startyear'},
                {data: 'education_level', name: 'education_level'},
                {data: 'enrolment', name: 'enrolment'},
                {data: 'created_at', name: 'created_at'}
            ]
        });
    });
</script>

<!-- App js -->
<script src="dash/assets/js/app.js"></script>
