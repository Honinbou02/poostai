<?php

namespace RachidLaasri\LaravelInstaller\Repositories;

use Closure;
use Illuminate\Http\Request;

interface ApplicationStatusRepositoryInterface
{
        // Phương thức trả về view của trang finance, có thể thay đổi theo logic ứng dụng.
    public function financePage(string $view = 'panel.admin.finance.gateways.particles.finance'): string;

    // Phương thức kiểm tra giấy phép, có thể trả về true hoặc false tùy yêu cầu.
    public function financeLicense(): bool;

    // Phương thức lấy loại giấy phép, nếu có, có thể trả về null nếu không cần.
    public function licenseType(): ?string;

    // Phương thức kiểm tra hoặc tạo giấy phép, có thể loại bỏ nếu không cần nữa.
    public function generate(Request $request): bool;

    // Phương thức xử lý tiếp theo trong chuỗi middleware.
    public function next($request, Closure $next);

    // Phương thức webhook không còn cần thiết để xử lý license, có thể bỏ qua hoặc thay đổi cho mục đích khác.
    public function webhook($request);
   
}
/*
interface ApplicationStatusRepositoryInterface
{
    public function financePage(string $view = 'panel.admin.finance.gateways.particles.finance'): string;

    public function financeLicense(): bool;

    public function licenseType(): ?string;

    public function check(string $licenseKey, bool $installed = false): bool;

    public function portal();

    public function getVariable(string $key);

    public function generate(Request $request): bool;

    public function setLicense(): void;

    public function next($request, Closure $next);

    public function webhook($request);
}*/
