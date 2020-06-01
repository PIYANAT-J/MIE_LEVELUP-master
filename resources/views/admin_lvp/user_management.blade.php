@extends('admin_lvp.admin_lvp')

@section('user_managemant') 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9 mt-3 bg text1">ตารางจัดการผู้ใช้</div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($GAME as $games)
                <tr>
                    <td><img src="{{asset('section/File_game/Profile_game/'.$games->GAME_IMG_PROFILE)}}" alt="Image"class="game-img" ></td>
                    <td>{{ $games->GAME_NAME }}</td>
                    <td>{{ $games->GAME_DATE }}</td>
                    <td>{{ $games->GAME_STATUS }}</td>
                    <td>
                        <form action="{{ route('AppGame') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col mt-4" align="center">
                                <input name="submit" id="submit" type="submit" class="bnt button1" value="อนุมัติ">
                                <input type="hidden" name="GAME_APPROVE_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                <input type="hidden" name="GAME_ID" value="{{ $games->GAME_ID }}">
                                <input type="hidden" name="GAME_STATUS" value="อนุมัติ">
                                <input type="hidden" name="ADMIN_NAME" value="{{ Auth::user()->name }}">
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($KYC as $kycs)
                <tr>
                    <td><img src="{{asset('home/Kyc/'.$kycs->KYC_IMG)}}" alt="Image"class="game-img" ></td>
                    <td>{{ $kycs->USER_EMAIL }}</td>
                    <td>{{ $kycs->KYC_CREATE_DATE }}</td>
                    <td>{{ $kycs->KYC_STATUS }}</td>
                    <td>
                        <form action="{{ route('AppKyc') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col mt-4" align="center">
                                <input name="submit" id="submit" type="submit" class="bnt button1" value="อนุมัติ">
                                <input type="hidden" name="KYC_APPROVE_DATE" value="{{ date('Y-m-d H:i:s') }}">  
                                <input type="hidden" name="KYC_ID" value="{{ $kycs->KYC_ID }}">
                                <input type="hidden" name="KYC_STATUS" value="อนุมัติ">
                                <input type="hidden" name="ADMIN_NAME" value="{{ Auth::user()->name }}">
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection