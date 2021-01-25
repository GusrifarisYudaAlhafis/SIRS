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
                                            @if(Auth::user()->roles === 'DOCTOR')
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($item as $i)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $i->name }}</td>
                                                <td><a href="{{ route('prescriptions.edit', $i->id) }}" type="button" class="btn btn-primary btn-xs mr-2">Periksa</a></td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="3" class="text-center">
                                                    Data Tidak Ditemukan
                                                </td>
                                            </tr>
                                            @endforelse
                                            </tbody>
                                            @else
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($item as $i)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $i->name }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="2" class="text-center">
                                                    Data Tidak Ditemukan
                                                </td>
                                            </tr>
                                            @endforelse
                                            </tbody>
                                            @endif
                                        </table>
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
