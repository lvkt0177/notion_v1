<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskNotes - @yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    {{-- logo --}}
    <link rel="icon" sizes="192x192" type="image/png" href="https://sdmntprcentralus.oaiusercontent.com/files/00000000-c6b4-61f5-84b0-f5178f266f65/raw?se=2025-08-03T05%3A48%3A56Z&sp=r&sv=2024-08-04&sr=b&scid=8dad09fd-a344-5395-8d51-6a459048b9d6&skoid=add8ee7d-5fc7-451e-b06e-a82b2276cf62&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-08-02T11%3A36%3A27Z&ske=2025-08-03T11%3A36%3A27Z&sks=b&skv=2024-08-04&sig=RCTzXIgPvFGv01tBOGSvMYjXBzlvAXFjuEYpavnNCmI%3D">

    <link rel="icon" sizes="16x16 24x24 32x32 64x64" type="image/x-icon" href="/favicon.ico?v=2">
    @yield('css')
</head>
<body>
    <div class="app-container">
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-sticky-note"></i>
                    </div>
                    <span class="logo-text">TaskNotes</span>
                </div>
            </div>

            <div class="nav-menu">
                <div class="nav-section">
                    <div class="nav-section-title">Chính</div>
                    <div class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-home"></i>
                            <span class="nav-text">Trang chủ</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-sticky-note"></i>
                            <span class="nav-text">Tất cả ghi chú</span>
                            <span class="nav-badge">24</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-star"></i>
                            <span class="nav-text">Quan trọng</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-clock"></i>
                            <span class="nav-text">Gần đây</span>
                        </a>
                    </div>
                </div>

                <div class="nav-section">
                    <div class="nav-section-title">Danh mục</div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-film"></i>
                            <span class="nav-text">Review Phim</span>
                            <span class="nav-badge">5</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-graduation-cap"></i>
                            <span class="nav-text">Ghi chú lớp học</span>
                            <span class="nav-badge">12</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <span class="nav-text">Danh sách sách</span>
                            <span class="nav-badge">8</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <span class="nav-text">Công việc</span>
                            <span class="nav-badge">3</span>
                        </a>
                    </div>
                </div>

                <div class="nav-section">
                    <div class="nav-section-title">Khác</div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-trash"></i>
                            <span class="nav-text">Thùng rác</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <span class="nav-text">Cài đặt</span>
                        </a>
                    </div>
                </div>
                <div class="nav-item bg-danger text-white">
                        <a href="{{ route('logout') }}" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <span class="nav-text text-light">Đăng xuất</span>
                        </a>
                    </div>
            </div>
        </nav>

        <!-- Mobile Overlay -->
        <div class="mobile-overlay" id="mobileOverlay" onclick="closeMobileSidebar()"></div>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="header-content">
                    <div class="d-flex align-items-center gap-3">
                        <button class="header-btn d-md-none" onclick="openMobileSidebar()">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="page-title">Trang chủ</h1>
                    </div>
                    
                    <div class="header-actions">
                        <div class="search-container">
                            <input type="text" class="search-input" placeholder="Tìm kiếm ghi chú, tasks...">
                            <button class="search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        
                        <button class="header-btn">
                            <i class="fas fa-bell"></i>
                            <span class="d-none d-sm-inline">Thông báo</span>
                        </button>
                        
                        <div class="user-menu">
                            <div class="user-avatar">
                                <img src="https://marketplace.canva.com/Dz63E/MAF4KJDz63E/1/tl/canva-user-icon-MAF4KJDz63E.png" style="width: 32px;" alt="Avatar" class="rounded-circle">
                            </div>
                            <span class="d-none d-sm-inline">{{ Auth::user()->full_name }}</span>
                        </div>
                    </div>
                </div>
            </header>

            <div class="content-area">
                @yield('content')
            </div>
        </div>
    </div>
    
    <button class="fab" onclick="addNewNote()">
        <i class="fas fa-plus"></i>
    </button>

    @yield('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add some interactivity
        function addNewNote() {
            alert('Tính năng thêm ghi chú mới sẽ được phát triển!');
        }

        // Search functionality
        document.querySelector('.search-input').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            // Implement search logic here
            console.log('Searching for:', searchTerm);
        });

        // Animate elements on load
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.folder-card, .note-card, .stat-card');
            elements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    element.style.transition = 'all 0.6s cubic-bezier(0.23, 1, 0.320, 1)';
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        // Add click effects to cards
        document.querySelectorAll('.folder-card, .note-card').forEach(card => {
            card.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });
    </script>
</body>
</html>