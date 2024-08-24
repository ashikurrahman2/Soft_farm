@extends('layouts.admin')

@section('title', 'About Office')

@section('admin_content')
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">About Office</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#aboutofficeModal">+
                                    Add New</button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- HTML5 Export Buttons table start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header table-card-header">
                            <h5>All categories list here</h5>
                        </div>
                        <div class="card-body">
                            <div class="dt-responsive table-responsive">
                                <table id="cbtn-selectors" class="table table-striped table-bordered nowrap table-sm">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>About Details</th>
                                            <th>satisfied customer</th>
                                            <th>Complete project</th>
                                            <th>Experience team</th>
                                            <th>Winning Awards</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($abouts as $about)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $about->title }}</td>
                                                <td>{{ $about->sub_title }}</td>
                                                <td>{{ $about->satisfied_customer }}</td>
                                                <td>{{ $about->completion_project }}</td>
                                                <td>{{ $about->experience_team }}</td>
                                                <td>{{ $about->winning_awards }}</td>
                                                <td class="d-flex">
                                                    <a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 editBtn"
                                                        data-id="{{ $about->id }}" 
                                                        data-title="{{ $about->title }}"
                                                        data-sub_title="{{ $about->sub_title }}"
                                                        data-satisfied_customer="{{ $about->satisfied_customer }}"
                                                        data-completion_project="{{ $about->completion_project }}"
                                                        data-experience_team="{{ $about->experience_team }}"
                                                        data-winning_awards="{{ $about->winning_awards }}"
                                                        
                                                        >
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    {{-- <button class="btn btn-danger btn-sm delete"
                                                        data-id="{{ $loop->iteration }}">
                                                        <i class="fa fa-trash"></i>
                                                    </button> --}}
                                                    <button class="btn btn-danger btn-sm delete"
                                                        data-id="{{ $about->id }}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>

                                                    {{-- <form id="delete-form-{{ $loop->iteration }}"
                                                        action="{{ route('aboutoffice.destroy', $about->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form> --}}
                                                    <form id="delete-form-{{ $about->id }}"
                                                        action="{{ route('aboutoffice.destroy', $about->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>



                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>About Details</th>
                                            <th>satisfied customer</th>
                                            <th>Complete project</th>
                                            <th>Experience team</th>
                                            <th>Winning Awards</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- HTML5 Export Buttons end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    <!-- About Insert Modal -->
    <div class="modal fade" id="aboutofficeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Add About</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('aboutoffice.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="col-form-label pt-0">Title<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="text" class="form-control" id="title" name="title" required>
                            <small id="emailHelp" class="form-text text-muted">This is your main title</small>
                        </div>
                        <div class="form-group">
                            <label for="satisfied_customer" class="col-form-label pt-0">satisfied customer<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="text" class="form-control" id="satisfied_customer" name="satisfied_customer"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="completion_project" class="col-form-label pt-0">Completion project<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="text" class="form-control" id="completion_project" name="completion_project"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="experience_team" class="col-form-label pt-0">Experience Team<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="text" class="form-control" id="experience_team" name="experience_team" required>
                        </div>
                        <div class="form-group">
                            <label for="winning_awards" class="col-form-label pt-0">Winning Awards<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="number" class="form-control" id="winning_awards" name="winning_awards" required>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">About Details</label>
                                <textarea class="form-control textarea" name="sub_title" id="summernote" rows="4">{{ old('sub_title') }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- About edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Add About</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="col-form-label pt-0">Title<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="text" class="form-control" id="title" name="title" required>
                            <small id="emailHelp" class="form-text text-muted">This is your main title</small>
                        </div>
                        <div class="form-group">
                            <label for="satisfied_customer" class="col-form-label pt-0">satisfied customer<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="text" class="form-control" id="satisfied_customer" name="satisfied_customer"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="completion_project" class="col-form-label pt-0">Completion project<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="text" class="form-control" id="completion_project" name="completion_project"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="experience_team" class="col-form-label pt-0">Experience Team<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="text" class="form-control" id="experience_team" name="experience_team"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="winning_awards" class="col-form-label pt-0">Winning Awards<sup
                                    class="text-size-20 top-1">*</sup></label>
                            <input type="number" class="form-control" id="winning_awards" name="winning_awards"
                                required>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">About Details</label>
                                <textarea class="form-control textarea" name="sub_title" id="summernote2" rows="4">
                                    {{ old('sub_title') }}
                                </textarea>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">About Details</label>
                                <textarea class="form-control textarea" name="sub_title" id="summernote2" rows="4">{{ old('sub_title') }}</textarea>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Aboutoffice Edit Modal -->
    {{-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="editModalLabel">Edit About</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="editModalBody">
                    <!-- The form will be populated here by the JS -->
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // $(document).on('click', '.editBtn', function() {
        //     let id = $(this).data('id');
        //     let title = $(this).data('title');
        //     let sub_title = $(this).data('sub_title');
        //     let satisfied_customer = $(this).data('satisfied_customer');
        //     let completion_project = $(this).data('completion_project');
        //     let experience_team = $(this).data('experience_team');
        //     let winning_awards = $(this).data('winning_awards');

        //     $("#editModal").find("[name=title]").val(title);
        //     $("#editModal").find("[name=sub_title]").html(sub_title);
        //     $("#editModal").find("[name=satisfied_customer]").val(satisfied_customer);
        //     $("#editModal").find("[name=completion_project]").val(completion_project);
        //     $("#editModal").find("[name=experience_team]").val(experience_team);
        //     $("#editModal").find("[name=winning_awards]").val(winning_awards);


            


        //     $("#editModal").modal('show');
        // });
        $(document).on('click', '.editBtn', function() {
    let id = $(this).data('id');
    let title = $(this).data('title');
    let sub_title = $(this).data('sub_title');
    let satisfied_customer = $(this).data('satisfied_customer');
    let completion_project = $(this).data('completion_project');
    let experience_team = $(this).data('experience_team');
    let winning_awards = $(this).data('winning_awards');

    $("#editModal").find("[name=title]").val(title);
    $("#editModal").find("[name=sub_title]").val(sub_title);  // এখানে html() এর পরিবর্তে val() ব্যবহার করুন।
    $("#editModal").find("[name=satisfied_customer]").val(satisfied_customer);
    $("#editModal").find("[name=completion_project]").val(completion_project);
    $("#editModal").find("[name=experience_team]").val(experience_team);
    $("#editModal").find("[name=winning_awards]").val(winning_awards);

    $("#editModal").modal('show');
});


        // input event 

        // $(document).on('input', "[name=title]", function () {
            
        //     let value = $(this).val();

        //     $("#editModal").find("[name=satisfied_customer]").val(value);

        // });
    </script>


    <script type="text/javascript">
        // For Edit About 
        $('body').on('click', '.edit', function() {
            let id = $(this).data('id');
            console.log(id);

            $.get("aboutoffice/" + id + "/edit", function(data) {
                console.log(data);

                $('#editModalBody').html(data);
            });
        });
    </script>

@endsection
