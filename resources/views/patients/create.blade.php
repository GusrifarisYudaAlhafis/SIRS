<x-main-layout>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <div class="card my-3 no-b">
                                    <div class="card-body">
                                        <form action="{{ route('patients.store') }}" method="post" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="card no-b">
                                                <div class="card-body">
                                                    <h5 class="card-title">Form Pasien</h5>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6 m-0">
                                                                    <label for="name" class="col-form-label s-12">Nama Pasien</label>
                                                                    <input id="name" placeholder="Masukkan Nama" class="form-control r-0 light s-12 " type="text" name="name" value="{{ old('name') ?? Auth::user()->name }}" required>
                                                                    <div class="invalid-feedback">
                                                                        Tolong Masukkan Nama.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6 m-0">
                                                                    <label for="dob" class="col-form-label s-12"><i class="icon-calendar mr-2"></i>Tempat, Tanggal Lahir</label>
                                                                    <input id="dob" placeholder="Masukkan Tempat, Tanggal Lahir" class="form-control r-0 light s-12 datePicker" type="text" name="ttl" value="{{ old('ttl') ?? Auth::user()->ttl }}" required>
                                                                    <div class="invalid-feedback">
                                                                        Tolong Masukkan Tempat, Tanggal Lahir.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6 m-0">
                                                                    <label for="dob" class="col-form-label s-12">Jenis Kelamin</label>
                                                                    <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="gender" required>
                                                                        <option value="{{ old('gender') ?? Auth::user()->gender }}">{{ old('gender') ?? Auth::user()->gender }}</option>
                                                                        <option value="Laki-laki">Laki-laki</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Tolong Pilih Jenis Kelamin.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-1">
                                                        <div class="form-group col-md-4 m-0">
                                                            <label for="mobile" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>Nomor HP</label>
                                                            <input id="mobile" placeholder="Masukkan Nomor HP" class="form-control r-0 light s-12" type="tel" name="phone_number" value="{{ old('phone_number') ?? Auth::user()->phone_number }}" required>
                                                            <div class="invalid-feedback">
                                                                Tolong Masukkan Nomor HP.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-9 m-0">
                                                            <label for="address" class="col-form-label s-12">Alamat</label>
                                                            <textarea type="text" class="form-control r-0 light s-12" id="address" placeholder="Masukkan Alamat" name="address" required>{{ old('address') ?? Auth::user()->address }}</textarea>
                                                            <div class="invalid-feedback">
                                                                Tolong Masukkan Alamat.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4 m-0">
                                                            <label for="dob" class="col-form-label s-12">Pilih Dokter</label>
                                                            <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="doctor_id" required>
                                                                <option value="">Pilih Dokter</option>
                                                                @foreach($item as $i)
                                                                @foreach($i->user2 as $u)
                                                                @endforeach
                                                                <option value="{{ $i->id }}">{{ $u->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Tolong Pilih Dokter.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-9 m-0">
                                                            <label for="address" class="col-form-label s-12">Keluhan</label>
                                                            <input type="text" class="form-control r-0 light s-12" id="address" placeholder="Masukkan Keluhan" name="complaint" required>
                                                            <div class="invalid-feedback">
                                                                Tolong Masukkan Keluhan.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-9 m-0">
                                                            <label for="address" class="col-form-label s-12">Riwayat Sebelumnya</label>
                                                            <input type="text" class="form-control r-0 light s-12" id="address" placeholder="Masukkan Riwayat Penyakit (Jika Ada)" name="history">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="card-body">
                                                    <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-xs">Batal</a>
                                                    <button type="submit" class="btn btn-primary btn-xs">Daftar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
