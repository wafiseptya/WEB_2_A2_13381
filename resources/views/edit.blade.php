@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Member</h1>
            <hr>
            <form action="{{ route('member.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama"
                    value="{{$data->name}}" 
                    >
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="usr" name="email" value="{{$data->email}}" >
                </div>
                <div class="form-group">
                    <label for="nohp">Password:</label>
                    <input type="password" class="form-control" id="usr" name="password">
                </div>
                <div class="form-group">
                    <label for="alamat">MacAddress:</label>
                    <input class="form-control" id="usr" name="macAddress" value="{{$data->macAddress}}" >
                    </input>
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
