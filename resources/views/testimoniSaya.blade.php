@extends('layouts.main')
@section('container')
<div class="container-fluid">
    <div class="row justify-content-center m-4">
        <div class="col-md-8 mt-auto mb-auto">
            <main class="form-registration w-100">
                <form class="formRegist" action="/Testimoni-Saya" method="post">
                    @csrf
                      <h2 class="h3 mb-3 fw-semibold mt-2 text-center">Testimoni Saya</h2>
                      {{-- <div class="inputCon">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div> --}}
                      <div class="inputCon">
                          <label for="category_id" style="margin: 8px">Nama Menu</label>
                          <select name="category_id" id="category_id" class="form-select" required>
                              @foreach ($makanan as $m)
                              <option value="{{ $m->menu->id}}">{{ $m->menu->nama_Menu}} on {{ $m->deleted_at }}</option>
                              @endforeach
                          </select>
                    </div>
                    <div class="inputCon" style="margin: 8px">
                        <label for="testimoni" style="margin-bottom: 8px">Testimoni:</label>
                        <textarea class="form-control" id="testimoni" name="testimoni" rows="15" required></textarea>
                        @error('testimoni')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div style="text-align: center;margin: 8px;padding: 8px">
                        <button type="submit" class="btn" id="passBtn">Submit</button>
                    </div>
                </form>
            </main>
        </div>
</div>
</div>



@endsection