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
                                        <table id="example2" class="table table-bordered table-hover data-tables" data-options='{ "paging": false; "searching":false}'>
                                            <thead>
                                            <tr>
                                                <th>Nama Obat</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($item as $i)
                                            @endforeach
                                            <tr>
                                                <td>{{ $i->medicine }}</td>
                                                <td>
                                                    <form action="{{ route('patients.destroy', $i->patient_id) }}" method="POST" class="inline-block">
                                                        {!! method_field('delete') . csrf_field() !!}
                                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">Selesai</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="nav-title">Detail Keluhan</h1>
                                        @foreach($i->patient2 as $p)
                                        @endforeach
                                        <span>{{ $p->complaint }}</span>
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
