@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Member</h1>
            <hr>
            <form action="{{ route('member.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="usr" name="email">
                </div>
                <div class="form-group">
                    <label for="nohp">Password:</label>
                    <input type="password" class="form-control" id="usr" name="password">
                </div>
                <div class="form-group">
                    <label for="alamat">MacAddress:</label>
                    <textarea class="form-control" id="usr" name="macAddress">
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
