<x-main-layout>
    <div class="container-fluid relative animatedParent animateOnce my-3">
        <div class="row row-eq-height my-3 mt-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-users s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter sc-counter">{{ \App\Models\User::where('roles','USER')->count() }}</div>
                                    Pengguna
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-local_hospital s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter sc-counter">{{ \App\Models\User::where('roles','DOCTOR')->count() }}</div>
                                    Dokter
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-user-circle-o s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter sc-counter">{{ \App\Models\User::where('roles','NURSE')->count() }}</div>
                                    Perawat
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-bed s-18"></i></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter sc-counter">{{ \App\Models\Room::where('status','Ada')->count() }}</div>
                                    Ketersediaan Ruangan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card no-b p-2">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="height-300">
                                <canvas
                                    data-chart="chartJs"
                                    data-chart-type="doughnut"
                                    data-dataset="[
                                                        ['{{ \App\Models\User::where('roles','USER')->count() }}', '{{ \App\Models\User::where('roles','DOCTOR')->count() }}', '{{ \App\Models\User::where('roles','NURSE')->count() }}'],

                                                    ]"
                                    data-labels="[['Pengguna'],['Dokter'],['Perawat']]"
                                    data-dataset-options="[
                                                    {
                                                        label: 'Disk',
                                                        backgroundColor: [
                                                            '#50d890',
                                                            '#4f98ca',
                                                            '#ffd369'
                                                        ],

                                                    },


                                                    ]"
                                    data-options="{legend: {display: !0,position: 'bottom',labels: {fontColor: '#7F8FA4',usePointStyle: !0}},
                                }"
                                >
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
