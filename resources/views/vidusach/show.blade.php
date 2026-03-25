<x-layout>
    <h2>Chi tiết tác phẩm: {{ $sach_chi_tiet->ten_sach }}</h2>
    
    <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; margin-top: 20px;">
        <p><strong>Mã sách (ID):</strong> {{ $sach_chi_tiet->id }}</p>
        <p><strong>Tên sách:</strong> {{ $sach_chi_tiet->ten_sach }}</p>
        
        <p><strong>Tác giả:</strong> {{ $sach_chi_tiet->tac_gia ?? 'Đang cập nhật' }}</p>
        <p><strong>Mô tả nội dung:</strong> {{ $sach_chi_tiet->mo_ta ?? 'Đang cập nhật' }}</p>
        
        <p><strong>Giá bán:</strong> <span style="color: red; font-size: 1.2em; font-weight: bold;">{{ number_format($sach_chi_tiet->gia_ban) }} VNĐ</span></p>
        
        <br>
        <a href="/sach" class="btn" style="background: #6c757d;">Quay lại danh sách</a>
    </div>
</x-layout>