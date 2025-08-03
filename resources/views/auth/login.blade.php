<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskNotes - Đăng nhập</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
</head>
<body>
    <!-- Animated background -->
    <div class="bg-animation"></div>

    <!-- Floating geometric shapes -->
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
    <div class="shape shape-4"></div>

    <div class="login-container">
        <div class="login-card">
            <!-- Floating orbs -->
            <div class="card-orb card-orb-1"></div>
            <div class="card-orb card-orb-2"></div>

            <!-- Brand Logo -->
            <div class="brand-logo">
                <div class="brand-icon">
                    <i class="fas fa-check-square"></i>
                </div>
                <div class="brand-text">TaskNotes</div>
            </div>

            <!-- Login Form -->
            <h1 class="login-title">Chào mừng trở lại</h1>
            <p class="login-subtitle">Đăng nhập vào tài khoản của bạn để bắt đầu quản lý công việc hiệu quả</p>

            <form id="loginForm" class="loginForm" method="POST">
                @csrf
                <!-- Email Input -->
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                    <label for="email"><i class="fas fa-envelope me-2"></i>Địa chỉ email</label>
                    <div class="invalid-feedback">
                        Vui lòng nhập địa chỉ email hợp lệ
                    </div>
                    <div class="valid-feedback">
                        Email hợp lệ!
                    </div>
                </div>

                <!-- Password Input -->
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu" required>
                    <label for="password"><i class="fas fa-lock me-2"></i>Mật khẩu</label>
                    <div class="invalid-feedback">
                        Mật khẩu phải có ít nhất 6 ký tự
                    </div>
                    <div class="valid-feedback">
                        Mật khẩu mạnh!
                    </div>
                </div>

                <!-- Form Extras -->
                <div class="form-extras">
                    <div class="form-check">
                        <label class="form-check-label" for="rememberMe">
                        </label>
                    </div>
                    <div class="forgot-password">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#forgotModal">Quên mật khẩu?</a>
                    </div>
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary-custom" id="loginBtn">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    Đăng nhập
                </button>
            </form>

            <!-- Signup Link -->
            <div class="signup-link">
                Chưa có tài khoản TaskNotes?
                <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Tạo tài khoản miễn phí</a>
            </div>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                <div class="modal-header" style="border-color: var(--border-color);">
                    <h5 class="modal-title" style="color: var(--text-primary);">
                        <i class="fas fa-key me-2 text-primary"></i>Khôi phục mật khẩu
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">
                        Nhập địa chỉ email của bạn và chúng tôi sẽ gửi liên kết để đặt lại mật khẩu
                    </p>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="forgotEmail" placeholder="name@example.com">
                        <label for="forgotEmail"><i class="fas fa-envelope me-2"></i>Địa chỉ email</label>
                    </div>
                </div>
                <div class="modal-footer" style="border-color: var(--border-color);">
                    <button type="button" class="btn btn-primary-custom">
                        <i class="fas fa-paper-plane me-2"></i>Gửi liên kết
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                <div class="modal-header" style="border-color: var(--border-color);">
                    <h5 class="modal-title" style="color: var(--text-primary);">
                        <i class="fas fa-user-plus me-2 text-primary"></i>Tạo tài khoản TaskNotes
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="firstName" placeholder="Tên">
                                <label for="firstName"><i class="fas fa-user me-2"></i>Tên</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lastName" placeholder="Họ">
                                <label for="lastName"><i class="fas fa-user me-2"></i>Họ</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="signupEmail" placeholder="name@example.com">
                        <label for="signupEmail"><i class="fas fa-envelope me-2"></i>Địa chỉ email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="signupPassword" placeholder="Mật khẩu">
                        <label for="signupPassword"><i class="fas fa-lock me-2"></i>Mật khẩu</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms" style="color: var(--text-secondary);">
                            Tôi đồng ý với <a href="#" style="color: var(--primary-color); text-decoration: none;">Điều khoản sử dụng</a> và <a href="#" style="color: var(--primary-color); text-decoration: none;">Chính sách bảo mật</a>
                        </label>
                    </div>
                </div>
                <div class="modal-footer" style="border-color: var(--border-color);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-primary-custom">
                        <i class="fas fa-rocket me-2"></i>Tạo tài khoản
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const form = e.target;
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const loginBtn = document.getElementById('loginBtn');
            const originalText = loginBtn.innerHTML;

            // Reset validation classes
            email.classList.remove('is-valid', 'is-invalid');
            password.classList.remove('is-valid', 'is-invalid');

            let isValid = true;

            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailRegex.test(email.value.trim())) {
                email.classList.add('is-invalid');
                isValid = false;
            } else {
                email.classList.add('is-valid');
            }

            if (password.value.length < 6) {
                password.classList.add('is-invalid');
                isValid = false;
            } else {
                password.classList.add('is-valid');
            }

            if (isValid) {
                loginBtn.disabled = true;

                const formData = new FormData(form);

                fetch('/login-user', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            loginBtn.innerHTML = '<i class="fas fa-check me-2"></i>Đăng nhập thành công!';
                            loginBtn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';

                            setTimeout(() => {
                                window.location.href = data.redirect;
                            }, 1000);
                        } else {
                            console.log(data.message);
                            showLoginError('<i class="fas fa-times me-2"></i>Đăng nhập thất bại!');
                        }
                    })
                    .catch(error => {
                        console.error('Server error:', error);
                        showLoginError('<i class="fas fa-times me-2"></i>Lỗi server!');
                    });
            }
        });

        function showLoginError(message) {
            loginBtn.innerHTML = message;
            loginBtn.style.background = 'linear-gradient(135deg, #ef4444, #dc2626)';
            setTimeout(() => {
                loginBtn.innerHTML = 'Đăng nhập';
                loginBtn.style.background = '';
                loginBtn.disabled = false;
            }, 1500);
        }
    </script>

</body>
</html>