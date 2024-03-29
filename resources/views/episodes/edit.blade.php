@extends('layouts.admin.app')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Update Episode</h5>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>

                                @endforeach
                            </ul>
                        </div>

                    @endif
                        <form action="{{route('episodes.update', [$podcast->slug, $episode->slug])}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Episode Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" id="title" required placeholder="Episode Title" autofocus
                                    value="{{ $episode->title }}" required>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    name="slug" id="slug" required value="{{ $episode->slug }}">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="slug" class="form-label">file upload</label>
                                <input type="file" class="form-control @error('audio_file') is-invalid @enderror"
                                    name="audio_file" id="audio_file" required value="{{$episode->audio_file}}">
                                @error('audio_file')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="body" class="form-label">Description</label>
                                <textarea name="description" id="body" value="">{{$episode->description}}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-dark">Update Episode</button>
                            </div>
                            @method('PATCH')
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


    </div>
    <!-- / Layout wrapper -->

    <script>
        const name = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/pod/checkPodcastSlug?title=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });

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
