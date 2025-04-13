<?php

namespace RachidLaasri\LaravelInstaller\Repositories;

use App\Models\SettingTwo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;


class ApplicationStatusRepository implements ApplicationStatusRepositoryInterface
{
    // Không cần URL kiểm tra license nữa
    // public string $baseLicenseUrl = 'https://portal.liquid-themes.com/api/license';

    public function financePage(string $view = 'panel.admin.finance.gateways.particles.finance'): string
    {
        // Không cần kiểm tra license nữa, trả về view mặc định.
        return $view;
    }

    public function financeLicense(): bool
    {
        // Không cần kiểm tra license nữa, trả về giá trị mặc định.
        return true;
    }

    public function licenseType(): ?string
    {
        // Không cần trả về license type nữa, vì không có dữ liệu.
        return null;
    }

    public function check(string $licenseKey, bool $installed = false): bool
    {
        // Không cần thực hiện kiểm tra giấy phép qua API nữa.
        return false;  // Có thể thay đổi logic tùy nhu cầu.
    }

    public function getVariable(string $key)
    {
        // Không cần lấy giá trị từ portal, có thể tùy chỉnh logic khác.
        return null;
    }

    public function save($data): bool
    {
        // Không cần lưu dữ liệu vào file portal nữa.
        return false;
    }

    public function setLicense(): void
    {
        // Không cần cập nhật license vào database nữa.
        // Bạn có thể bỏ qua hoặc thay thế bằng logic khác nếu cần.
    }

    public function generate(Request $request): bool
    {
        // Xóa kiểm tra giấy phép từ request, không cần kiểm tra giấy phép nữa.
        return false;
    }

    public function next($request, Closure $next)
    {
        // Không cần kiểm tra giấy phép và chuyển hướng tới trang license nữa.
        return $next($request);
    }

    public function webhook($request)
    {
        // Không cần xử lý webhook từ hệ thống bên ngoài liên quan đến giấy phép.
        return response()->noContent();
    }

    // Giữ lại appKey nếu cần (để sử dụng trong các phần khác của ứng dụng)
    public function appKey(): string
    {
        return md5(config('app.key'));
    }
}

/*
class ApplicationStatusRepository implements ApplicationStatusRepositoryInterface
{
    public string $baseLicenseUrl = 'https://portal.liquid-themes.com/api/license';

    public function financePage(string $view = 'panel.admin.finance.gateways.particles.finance'): string
    {
        if ($this->licenseType() === 'Extended License') {
            return $view;
        }

        return 'panel.admin.finance.gateways.particles.license';
    }

    public function financeLicense(): bool
    {
        return $this->licenseType() === 'Extended License';
    }

    public function licenseType(): ?string
    {
        $portal = $this->portal();

        return data_get($portal, 'liquid_license_type');
    }

    public function check(string $licenseKey, bool $installed = false): bool
    {
        $portal = $this->portal() ?: [];

        $data = array_merge($portal, [
            'liquid_license_type'       => 'Extended License',
            'liquid_license_domain_key' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
            'installed'                 => $installed,
        ]);

        return $this->save($data);
    }

    public function portal()
    {
        $data = Storage::disk('local')->get('portal');

        if ($data) {
            return unserialize(trim($data));
        }

        return null;
    }

    public function getVariable(string $key)
    {
        $portal = $this->portal();

        return data_get($portal, $key);
    }

    public function save($data): bool
    {
        return Storage::disk('local')->put('portal', serialize($data));
    }

    public function setLicense(): void
    {
        $data = $this->portal();

        if (is_null($data)) {
            return;
        }

        $data['installed'] = true;

        $this->save($data);

        if (
            Schema::hasTable('settings_two')
            && Schema::hasColumn('settings_two', 'liquid_license_type')
            && Schema::hasColumn('settings_two', 'liquid_license_domain_key')
        ) {
            SettingTwo::query()->first()->update([
                'liquid_license_type'       => $data['liquid_license_type'],
                'liquid_license_domain_key' => $data['liquid_license_domain_key'],
            ]);
        }
    }

    public function generate(Request $request): bool
    {
        if ($request->exists(['liquid_license_status', 'liquid_license_domain_key', 'liquid_license_domain_key'])) {
            return $this->check($request->input('liquid_license_domain_key'), true);
        }

        return false;
    }

    public function next($request, Closure $next)
    {
        return $next($request);
    }

    public function webhook($request)
    {
        $portal = $this->portal();

		$portal['blocked'] = false;

		$this->save($portal);

		return response()->noContent();
    }

    public function appKey(): string
    {
        return md5(config('app.key'));
    }
}*/
