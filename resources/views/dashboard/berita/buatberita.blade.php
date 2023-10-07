@extends('dashboard.navbar')
{{-- @include('dashboard.detail') --}}

@section('dashboard')
    <div class="mt-3">
        <form action="" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="row d-flex flex-column gap-3">
                <div class="col-md-8">
                    <label for="title" class="form-label">Judul Berita</label>
                    <textarea class="form-control is-valid
                     @error('title') is-invalid @enderror " name="title"
                        id="title" rows="1">{{ old('title') }}</textarea>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="slug" class="form-label">Slug Berita</label>
                    <textarea class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" rows="1">{{ old('slug') }}</textarea>
                    @error('slug')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="col-md-4">
                    <label for="kategori">Kategory</label>

                    <select name="categori_id" id=""
                        class="form-select @error('categori_id') is-invalid @enderror">
                        <option value="">Silahkan Pilih</option>
                        @foreach ($categori as $item)
                            @if (old('categori_id') == $item->id)
                                <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('categori_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="x">Isi Berita</label>

                    <input id="x" type="hidden" name="body" value="{{ old('body') }}">
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <trix-editor input="x"></trix-editor>
                </div>
                <div class="col-md-6 ms-auto">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Upload</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        title.addEventListener('change', () => {
            fetch(`/buat-berita/cekslug?title=${title.value}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(
                            `Kesalahan dalam mengambil data dari server. Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    slug.value = data.slug;
                    console.log('Berhasil mendapatkan data. Status: ' + data
                        .status); // Gunakan data.status untuk status respons HTTP
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
