@extends('layouts.app')

@section('content')
        @include('component.sidebar')
            @include('component.header')
            <div class="c-body mt-2">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                <div class="card-header mb-3 d-flex justify-content-between">
                                        <div class="title-content">List Flash Sale
                                    </div>
                                            <div>
                                            <button  class="button-add" data-target="#modal" data-toggle="modal">
                                    Tambah Flash Sale
                                                </button>                    
</div>
                                    </div>
                                        <table class="table table-responsive table-striped mydatatable ml-1 mr-1">
                                    <thead>
                                        <tr>
                                            <th>Id Voucher</th>
                                            <th>Nama Voucher</th>
                                            <th>Nominal Potongan</th>
                                            <th>Kategori</th>
                                            <th>Periode Mulai</th>
                                            <th>Periode Berakhir</th>
                                            <th>Kuota</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Yiorgos Avraamu</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>Jl. Raya Bandung Sumedang KM.21, Hegarmanah, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</td>
                                            <td>Member</td>
                                            <td>Member</td>
                                            <td></td>
                                            <td>
                                            <button class="button badge badge-success" data-toggle="modal" data-target="#deleteModal"
                                                style="background: #A6CB26;"
                                                >Delete</button>
                                            </td><td>
                                            <button class="button badge badge-success" data-toggle="modal" data-target="#updateModal"
                                                style="background: #A6CB26;"
                                                >Update</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gio</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>Jl. Raya Bandung Sumedang KM.21, Hegarmanah, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</td>
                                            <td>Member</td>
                                            <td>Member</td>
                                            <td></td>
                                            <td>                                    
                                            <button class="button badge badge-success" data-toggle="modal" data-target="#deleteModal"
                                                style="background: #A6CB26;"
                                                >Delete</button>
                                            </td><td>
                                            <button class="button badge badge-success" data-toggle="modal" data-target="#updateModal"
                                                style="background: #A6CB26;"
                                                >Update</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                    </div>
                                </div>
                                @include('admin.addFlashsale')
                            </div>
                        @include('admin.updateFlashsale')
                        </div>
                    </div>
                </div>
                @include('admin.deleteFlashsale')
            </div>
<script>
$(document).ready( function () {
    $('.mydatatable').DataTable();
} );
</script>

<script>
    $(function() {
   $('[data-toggle="datepicker"]').datepicker({
      autoHide: true,
      zIndex: 2048,
   });
});
</script>
@endsection