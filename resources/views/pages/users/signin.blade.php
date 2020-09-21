@extends('.pages.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>ĐĂNG NHẬP</h1>
                    <span>Đăng nhập vào tài khoản của bạn để sử dụng các tính năng của JD</span>
                </div>
            </div>
        </div>
    </div>
    <div class="tr-account section-padding">
        <div class="container text-center">
            <div class="user-account">
                <div class="account-content">
                    @if(session('dkuser'))
                            <div class="alert alert-success" role="alert" >
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> {{session('dkuser')}}
                            </div>
                        @endif
                    @if(session('errorlogin'))
                            <div class="alert alert-danger" role="alert" >
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="fa fa-ban fa-lg" aria-hidden="true"></i> {{session('errorlogin')}}
                            </div>
                        @endif
                    <form action="{{ route('login-user')}}" class="tr-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Vui lòng nhập Email" name="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" value="{{old('password')}}">
                            @if($errors->has('password'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert"  style="color: red">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        </div>
                        <div class="user-option">
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember_token" id="remember_token" value="Remember me"{{ old('remember_token') ? 'checked' : '' }}>Nhớ Mật Khẩu</label>
                            </div>
                            <div class="forgot-password">
                                <a href="#">Quên Mật Khẩu ?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                      @csrf
                    </form>
                    <div class="new-user text-center">
                        <span>Bạn chưa có tài khoản /<a href="{{route('add-signup')}}" style="color: cornflowerblue;font-weight: bold">Tạo tài khoản ?</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function xoaSanPham(){
            var conf=confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
            return conf;
        }
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);
    </script>
@endsection
