@include('admin.Header')
@include('admin.Sidebar')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-1">User Registration</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Registration</a></li>
                </ol>
            </div>
        </div>

        <!-- Form row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Registration Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('add_user') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter your name" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="email">Email <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your valid email" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="password">Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Choose a safe password" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="password_confirmation">Confirm Password
                                    <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" placeholder="Confirm your password" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="role">Role <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="analyst">Analyst</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.Footer')
