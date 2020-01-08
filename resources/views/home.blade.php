@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CREATE</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group row">
                        <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

                        <div class="col-md-6">
                            <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>

                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>

                                @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="sinopsis" class="col-md-4 col-form-label text-md-right">{{ __('Sinopsis') }}</label>

                            <div class="col-md-6">
                                <input id="sinopsis" type="text" class="form-control @error('sinopsis') is-invalid @enderror" name="sinopsis" value="{{ old('sinopsis') }}" required autocomplete="sinopsis" autofocus>

                                @error('sinopsis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="pemain" class="col-md-4 col-form-label text-md-right">{{ __('Pemain') }}</label>

                            <div class="col-md-6">
                                <input id="pemain" type="text" class="form-control @error('pemain') is-invalid @enderror" name="pemain" value="{{ old('pemain') }}" required autocomplete="pemain" autofocus>

                                @error('pemain')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="produser" class="col-md-4 col-form-label text-md-right">{{ __('Produser') }}</label>

                            <div class="col-md-6">
                                <input id="produser" type="text" class="form-control @error('produser') is-invalid @enderror" name="produser" value="{{ old('produser') }}" required autocomplete="produser" autofocus>

                                @error('produser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="sutradara" class="col-md-4 col-form-label text-md-right">{{ __('Sutradara') }}</label>

                            <div class="col-md-6">
                                <input id="sutradara" type="text" class="form-control @error('sutradara') is-invalid @enderror" name="sutradara" value="{{ old('sutradara') }}" required autocomplete="sutradara" autofocus>

                                @error('sutradara')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="penulis" class="col-md-4 col-form-label text-md-right">{{ __('Penulis') }}</label>

                            <div class="col-md-6">
                                <input id="penulis" type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{ old('penulis') }}" required autocomplete="penulis" autofocus>

                                @error('penulis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="produksi" class="col-md-4 col-form-label text-md-right">{{ __('Produksi') }}</label>

                            <div class="col-md-6">
                                <input id="produksi" type="text" class="form-control @error('produksi') is-invalid @enderror" name="produksi" value="{{ old('produksi') }}" required autocomplete="produksi" autofocus>

                                @error('produksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="poster" class="col-md-4 col-form-label text-md-right">{{ __('Link Poster') }}</label>

                            <div class="col-md-6">
                                <input id="poster" type="text" class="form-control @error('poster') is-invalid @enderror" name="poster" value="{{ old('poster') }}" required autocomplete="poster" autofocus>

                                @error('poster')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="trailer" class="col-md-4 col-form-label text-md-right">{{ __('Link Trailer') }}</label>

                            <div class="col-md-6">
                                <input id="trailer" type="text" placeholder="https://www.youtube.com/embed/2wcj6SrX4zw" class="form-control @error('trailer') is-invalid @enderror" name="trailer" value="{{ old('trailer') }}" required autocomplete="trailer" autofocus>

                                @error('trailer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="umur" class="col-md-4 col-form-label text-md-right">{{ __('Umur') }}</label>

                            <div class="col-md-6">
                                <input id="umur" type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" required autocomplete="umur" autofocus>

                                @error('umur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>

                            <div class="col-md-6">
                                <input id="rating" type="number" placeholder="0-5" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>

                                @error('rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="durasi" class="col-md-4 col-form-label text-md-right">{{ __('durasi') }}</label>

                            <div class="col-md-6">
                                <input id="durasi" type="number" placeholder="minutes" class="form-control @error('durasi') is-invalid @enderror" name="durasi" value="{{ old('durasi') }}" required autocomplete="durasi" autofocus>

                                @error('durasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="jadwal" class="col-md-4 col-form-label text-md-right">{{ __('Jadwal') }}</label>

                            <div class="col-md-6">
                                <input id="jadwal" type="date" class="form-control @error('jadwal') is-invalid @enderror" name="jadwal" value="{{ old('jadwal') }}" required autocomplete="jadwal" autofocus>

                                @error('jadwal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary" id="btnpost">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
    <script type="text/javascript">
    $(document).on('click', '#btnpost', function(event){
            alert('Yakin ingin menambah data?');
            event.preventDefault();
            $.ajax({
            url: 'http://localhost:8000/api/movie',
            type: 'post',
            dataType : 'json',
            data: {
                    "judul": $('#judul').val(),
                    "genre": $('#genre').val(),
                    "sinopsis": $('#sinopsis').val(),
                    "pemain": $('#pemain').val(),
                    "produser": $('#produser').val(),
                    "sutradara": $('#sutradara').val(),
                    "penulis": $('#penulis').val(),
                    "produksi": $('#produksi').val(),
                    "poster": $('#poster').val(),
                    "trailer": $('#trailer').val(),
                    "umur": $('#umur').val(),
                    "rating": $('#rating').val(),
                    "durasi": $('#durasi').val(),
                    "jadwal": $('#jadwal').val(),
                },
                headers: {
                        Authorization : 'Bearer {{Auth::user()->api_token}}',
                },
                success: function (data) {
                    console.info(data);
                    alert('Data Berhasil Ditambahkan');
            }
        });
        });
    </script>

@endsection
