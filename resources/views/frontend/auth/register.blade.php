@extends('unheader')
@section('content')
    <style>
        .container-fluid .row .login_content {
            min-height: calc(100vh - 180px);
            position: relative;
            background: aliceblue;
            padding-top: 50px;
        }

        .requied {
            color: red;
        }

        .container-fluid .row .login_content form {
            position: relative;
            top: 50%;
            transform: translate(0, -50%);
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-10 login_content">
                <H2 class="text-center">Đăng ký tài khoản</H2>
                <form method="post" action="{{ route('auth.create') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="email">Email <span class="requied padding-5">*</span></label>
                            <input type="email" class="form-control" name="email" id="email">
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Mật Khẩu</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password_confirm">Nhập Lại Mật Khẩu</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="facebook">Link Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="facebook">
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email_user">Email người giới thiệu</label>
                            <input type="email" class="form-control" id="email_user" name="email_user">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Họ Tên <span
                                    class="requied padding-5">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Họ Tên">
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sex">Giới Tính <span class="requied padding-5">*</span></label>
                            <select id="sex" name="sex" class="form-control">
                                <option selected value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 date">
                            <label for="date_of_birth">Ngày Sinh <span class="requied padding-5">*</span></label>
                            <input class="form-control" id="date_of_birth" name="date_of_birth">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                           </span>
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Số Điện Thoại <span class="requied padding-5">*</span></label>
                            <input type="number" class="form-control" id="phone" name="phone">
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="job">Nghề Nghiệp</label>
                            <input type="text" class="form-control" id="job">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="course">khóa học <span class="requied padding-5">*</span></label>
                            <select id="course" name="course" class="form-control">
                                @foreach($course as $value)
                                    <option selected value="{{$value->id}}">{{$value->region}}</option>
                                @endforeach
                            </select>
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="province">Địa Chỉ <span class="requied padding-5">*</span></label>
                            <input type="text" class="form-control" id="province" name="province">
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="education">Trình Độ Học Vấn <span class="requied padding-5">*</span></label>
                            <select id="education" name="education" class="form-control">
                                <option selected value="1">THCS</option>
                                <option value="2">THPT</option>
                                <option value="3">Cao Đẳng</option>
                                <option value="4">Đại Học</option>
                            </select>
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function () {
            $('#date_of_birth').datepicker({
                uiLibrary: 'bootstrap4'
            })
        });
    </script>
@stop
