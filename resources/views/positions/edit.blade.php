@extends('layouts.base')
@section('title', 'Edit Jabatan')
@section('title-2', 'Edit Jabatan')
@section('title-3', 'EditJab')
@section('content')

    <div class="container">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="{{ route('positions.index') }}" class="btn btn-warning"><i class="fas fa-undo-alt"></i>
                        Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('positions.edit', $position) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="jabatan">Edit Nama Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" value="{{ $position->jabatan }}"
                                class="form-control @error('jabatan') is-invalid @enderror" aria-describedby="#"
                                placeholder="Input Jabatan">
                            {!! $errors->first('jabatan', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scriptdata')
    <script>
        $(document).ready(function() {
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover

        });

    </script>
    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
@endsection
