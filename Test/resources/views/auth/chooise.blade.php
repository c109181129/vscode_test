<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Layout 3 | Canvas</title>
</head>
<body class="stretched">
    <section id="content">
        <div class="content-wrap">
            <div class="container">
                <div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">
                    <div class="accordion-header">
                        <div class="accordion-icon">
                            <i class="accordion-closed fa-solid fa-lock"></i>
                            <i class="accordion-open bi-unlock"></i>
                        </div>
                        <div class="accordion-title">
                            登入你的帳號
                        </div>
                    </div>
                    <div class="accordion-content">
                        <form action="{{ url('user/auth/chooise-process') }}" method="POST">
                            @csrf
                            <div class="col-12 form-group">
                                <label>帳號:</label>
                                <input type="text" id="name" name="name" value="" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>密碼:</label>
                                <input type="password" id="password" name="password" value="" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <div class="d-flex justify-content-between">
                                    <button class="button button-3d button-black m-0" id="submit" name="submit" value="login">登入</button>
                                    <a href="#">忘記密碼?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accordion-header">
                        <div class="accordion-icon">
                            <i class="accordion-closed bi-person"></i>
                            <i class="accordion-open bi-check-circle-fill"></i>
                        </div>
                        <div class="accordion-title">
                            新使用者? 註冊一個新帳號
                        </div>
                    </div>
                    <div class="accordion-content">
                        <form action="{{ url('user/auth/chooise-process') }}" method="POST">
                            @csrf
                            <div class="col-12 form-group">
                                <label>暱稱:</label>
                                <input type="text" id="nickname" name="nickname" value="" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>電子郵件:</label>
                                <input type="text" id="account" name="account" value="" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>名字:</label>
                                <input type="text" id="name" name="name" value="" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>電話:</label>
                                <input type="text" id="phone" name="phone" value="" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>密碼:</label>
                                <input type="password" id="password" name="password" value="" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>再次確認密碼:</label>
                                <input type="password" id="repassword" name="repassword" value="" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>帳號類型:</label>
                                <input type="radio" name="position" value="user">使用者
                                <input type="radio" name="position" value="admin">管理員
                            </div>
                            <div class="col-12 form-group">
                                <button class="button button-3d button-black m-0" id="submit" name="submit" value="register">註冊</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="gotoTop" class="uil uil-angle-up"></div>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>
</html>