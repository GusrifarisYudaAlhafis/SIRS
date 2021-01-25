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
                                            @if(Auth::user()->roles === "NURSE")
                                            <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Persediaan</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($item as $i)
                                            <tr>
                                                <td>{{ $i->name }}</td>
                                                <td>{{ $i->class }}</td>
                                                <td>{{ $i->status }}</td>
                                                <td style="text-align: center">
                                                    <a href="{{ route('rooms.edit', $i->id) }}" type="button" class="btn btn-success btn-xs" style="margin: 5px">Ubah</a>
                                                    <form action="{{ route('rooms.destroy', $i->id) }}" method="POST" class="inline-block">
                                                        {!! method_field('delete') . csrf_field() !!}
                                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    Data Tidak Ditemukan
                                                </td>
                                            </tr>
                                            @endforelse
                                            </tbody>
                                            @else
                                            <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Persediaan</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($item as $i)
                                            <tr>
                                                <td>{{ $i->name }}</td>
                                                <td>{{ $i->class }}</td>
                                                <td>{{ $i->status }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="3" class="text-center">
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
