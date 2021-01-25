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
                                        <form action="{{ route('prescriptions.store') }}" method="post" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="card no-b">
                                                <div class="card-body">
                                                    <h5 class="card-title">Resep</h5>
                                                    <div class="form-row">
                                                        <div class="col-md-8">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6 m-0">
                                                                    <label for="name" class="col-form-label s-12">Nama Obat</label>
                                                                    @foreach($item as $i)
                                                                    <input type="number" name="patient_id" value="{{ $i->id }}" class="hidden">
                                                                    @endforeach
                                                                    <input id="name" placeholder="Masukkan Obat" class="form-control r-0 light s-12 " type="text" name="medicine" required>
                                                                    <div class="invalid-feedback">
                                                                        Tolong Masukkan Obat.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="card-body">
                                                    <button type="submit" class="btn btn-primary btn-xs">Selesai</button>
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
