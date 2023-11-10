@extends('layouts.admin.app')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Add Author</h5>
                    <div class="card-body">

                        <form action="{{ route('authors.store') }}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="name" id="name" required placeholder="E.g Smith Hassan"
                                    autofocus value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- 'name' => 'super admin',
                            'username' => 'admin',
                            'email' => 'admin@admin.com',
                            'haveAvatar' => false,
                            'default_avatar' => 'storage/default_avatar-1.jpg',
                            'email_verified_at' => now(),
                            'password' => Hash::make('password'),
                            'user_types' => 'Admin',
                            'user_status' => 'ACTIVE', --}}

                            <div class="form-group mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" id="username" required value="{{ old('username') }}">
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="user_types" class="form-label">Admin role</label>
                                <input type="text" class="form-control @error('user_types') is-invalid @enderror"
                                    name="user_types" id="user_types" required value="{{ old('user_types') }}">
                                @error('user_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" required value="{{ old('password') }}">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="user_status" class="form-label">Admin status</label>
                                <select class="form-select" name="user_status">
                                    <option value="PENDING">PENDING</option>
                                    <option value="SUSPEND">SUSPEND</option>
                                    <option value="ACTIVE">ACTIVE</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-danger">Add Author</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

        @include('includes.admin.footer')

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });

        /* document.addEventListener("trix-file-accept", event => {
            event.preventDefault()
        }); */






        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        };
    </script>

    <!-- CK Editor -->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
        .create( document.querySelector( '#body' ),{
                ckfinder: {
                    uploadUrl: '{{route('post.fileupload').'?_token='.csrf_token()}}',
                }
        })
        .catch( error => {
            console.error( error );
        });

</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
@endsection
