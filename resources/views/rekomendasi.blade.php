@extends('layouts.main')
@section('container')

<div class="container-fluid">
        <div class="row justify-content-center m-4">
            <div class="col-md-4 mt-auto mb-auto">
                <main class="form-registration w-100">
                    <form class="formRegist" action="/rekomendasi/detail" method="post">
                        @csrf
                        <h2 class="h3 mb-3 fw-semibold mt-2 text-center">Data Diri</h2>
                        <div class="inputCon">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{ auth()->user()->name }}" readonly>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                      </div>
                      <div class="inputCon">
                        <label for="age">Usia</label>
                        <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Usia" required>
                        @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="inputCon">
                        <label for="weight">Berat Badan (kg)</label>
                        <input type="number" name="weight" class="form-control @error('weight') is-invalid @enderror" id="weight" placeholder="Berat Badan" required>
                        @error('weight')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="inputCon">
                        <label for="height">Tinggi Badan</label>
                        <input type="number" name="height" class="form-control @error('height') is-invalid @enderror" id="height" placeholder="Tinggi Badan" required>
                        @error('height')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="inputCon">
                          <label for="activity_level" style="margin-bottom: 8px">Aktivitas Fisik Sehari-hari</label> <br>
                          <select class="form-select" name="activity_level" id="activity_level" style="margin-bottom: 8px" required>
                              <option value="1">Kurang aktif (Jarang olah raga/tidak sama sekali)</option>
                              <option value="2">Aktif ringan (1-3 kali olah raga dalam seminggu)</option>
                              <option value="3">Cukup aktif (3-5 kali olahraga dalam seminggu)</option>
                              <option value="4">Sangat aktif (6-7 kali olahraga dalam seminggu)</option>
                              <option value="5">Ekstra aktif (6-7 kali olahraga yang sangat berat dalam seminggu)</option>
                            </select>
                        </div>
                        <div class="inputCon">
                            <label for="gender" style="margin-bottom: 8px">Jenis Kelamin</label> <br>
                            <select class="form-select" style="width: 27%" name="gender" id="gender" style="margin-bottom: 8px" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                      <button class="btn w-100 py-2" type="submit" id="btnLogReg">Submit</button><br>
                    </form>
                </main>
            </div>
        </div>
    </div>
</body>
</html>

@endsection