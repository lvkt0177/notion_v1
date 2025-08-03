@extends('admin.layout.style')

@section('title', 'Trang chủ')

@section('content')
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon primary">
                    <i class="fas fa-sticky-note"></i>
                </div>
            </div>
            <div class="stat-number">24</div>
            <div class="stat-label">Tổng ghi chú</div>
        </div>
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon success">
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
            <div class="stat-number">18</div>
            <div class="stat-label">Hoàn thành</div>
        </div>
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon warning">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
            <div class="stat-number">6</div>
            <div class="stat-label">Đang thực hiện</div>
        </div>
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon danger">
                    <i class="fas fa-folder"></i>
                </div>
            </div>
            <div class="stat-number">4</div>
            <div class="stat-label">Danh mục</div>
        </div>
    </div>

    <!-- Recent Notes -->
    <h2 style="color: var(--text-primary); font-weight: 700; margin-bottom: 1.5rem;">Ghi chú gần đây</h2>

    <div class="cards-grid">
        <div class="note-card">
            <div class="note-header">
                <h3 class="note-title">Ôn tập kiểm tra giữa kì</h3>
                <button class="note-menu">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
            </div>
            <div class="note-content">
                Ôn tập các chương: Lập trình hướng đối tượng, Design Pattern, Database Management. Tập trung vào các bài tập
                thực hành...
            </div>
            <div class="note-footer">
                <span><i class="fas fa-clock me-1"></i> Hôm nay</span>
                <span><i class="fas fa-graduation-cap me-1"></i> Học tập</span>
            </div>
        </div>

    </div>
@endsection
