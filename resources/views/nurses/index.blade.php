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
                                                <th>Nama</th>
                                                <th>Senin</th>
                                                <th>Selasa</th>
                                                <th>Rabu</th>
                                                <th>Kamis</th>
                                                <th>Jum'at</th>
                                                <th>Sabtu</th>
                                                <th>Minggu</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($item as $i)
                                            @foreach($i->user1 as $u)
                                            @endforeach
                                            <tr>
                                                <td>{{ $u->name }}</td>
                                                @foreach($i->schedule1 as $s)
                                                <td>{{ $s->time_in }} - {{ $s->time_out }}</td>
                                                @endforeach
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="text-center">
                                                    Data Tidak Ditemukan
                                                </td>
                                            </tr>
                                            @endforelse
                                            </tbody>
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
