@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Materi Pembelajaran'])



    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>List Materi</h6>
                        <a href="tambahmateri" class="btn btn-danger" type="button"><i
                            class="ni ni-fat-add"></i>&nbsp;Tambah</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0" id="kelasx" >
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Mata Pelajaran</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Guru yang mengajar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a class="btn btn-default" href="{{route('cetakmateri')}}" target="_blank"><i class="ni ni-cloud-download-95"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#kelasx').DataTable({
                    "pageLength": 10,
                    "aLengthMenu": [
                        [5, 10, 15, -1],
                        [5, 10, 15, "Semua"]
                    ],
                    language: {
                        paginate: {
                            next: '<i class="ni ni-bold-right"></i>',
                    previous: '<i class="ni ni-bold-left"></i>'
                        }
                    }
                });
            });
        </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#kelasxi').DataTable({
            "pageLength": 10,
            "aLengthMenu": [
                [5, 10, 15, -1],
                [5, 10, 15, "Semua"]
            ],
            language: {
                paginate: {
                    next: '<i class="ni ni-bold-right"></i>',
                    previous: '<i class="ni ni-bold-left"></i>'
                }
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#kelasxii').DataTable({
            "pageLength": 10,
            "aLengthMenu": [
                [5, 10, 15, -1],
                [5, 10, 15, "Semua"]
            ],
            language: {
                paginate: {
                    next: '<i class="ni ni-bold-right"></i>',
                    previous: '<i class="ni ni-bold-left"></i>'
                }
            }
        });
    });
</script>

           </div>
@endsection

