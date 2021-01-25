<x-main-layout>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <form action="{{ route('rooms.store') }}" method="post" class="needs-validation" novalidate>
                                @csrf
                                <div class="card no-b">
                                    <div class="card-body">
                                        <h5 class="card-title">Form Ruangan</h5>
                                        <div class="form-row">
                                            <div class="col-md-8">
                                                <div class="form-group m-0">
                                                    <label for="name" class="col-form-label s-12">Nama Ruangan</label>
                                                    <input id="name" placeholder="Masukkan Nama Ruangan" class="form-control r-0 light s-12" type="text" name="name" required>
                                                    <div class="invalid-feedback">Tolong Masukkan Nama Ruangan.</div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 m-0">
                                                        <label for="dob" class="col-form-label s-12">Kelas Ruangan</label>
                                                        <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="class" required>
                                                            <option value="">Kelas Ruangan</option>
                                                            <option value="President suite">President suite</option>
                                                            <option value="VVIP">VVIP</option>
                                                            <option value="VIP">VIP</option>
                                                            <option value="Kelas 1">Kelas 1</option>
                                                            <option value="Kelas 2">Kelas 2</option>
                                                            <option value="Kelas 3">Kelas 3</option>
                                                        </select>
                                                        <div class="invalid-feedback">Tolong Pilih Kelas Ruangan.</div>
                                                    </div>
                                                    <div class="form-group col-md-6 m-0">
                                                        <label for="dob" class="col-form-label s-12">Persediaan Ruangan</label>
                                                        <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="status" required>
                                                            <option value="">Persediaan Ruangan</option>
                                                            <option value="Ada">Ada</option>
                                                            <option value="Penuh">Penuh</option>
                                                        </select>
                                                        <div class="invalid-feedback">Tolong Pilih Persediaan Ruangan.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <a href="{{ route('rooms.index') }}" class="btn btn-secondary btn-xs">Batal</a>
                                        <input type="submit" class="btn btn-primary btn-xs" name="button" value="Tambah">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
