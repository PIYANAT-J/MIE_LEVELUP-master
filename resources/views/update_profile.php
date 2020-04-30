@extends('layout\profile')

@section('profile')

    <div class="container-fluid">
        <div class="row">
            <a> Update Profile</a>
        </div>
    </div>

    <form action="update_profile" method="POST" enctype="multipart/form-data">
    <input type="file" name="user_img"/>
    @csrf
    <br>
    <br>
    <button type="submit">Up</button>
    </form>

@endsection
