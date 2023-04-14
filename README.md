
# Cài đặt code về máy cá nhân
### B1: clone code trên git
### b2: mở terminal, cd vào thư mục
chạy: valet link csdlhdnd(tên miền)
mở notepad run adm thay (thêm) tên mền trong host
### b3: tạo database (tạo trùng tên vs tên miền)
### b4: copy file env.examble thành 1 file env
chỉnh sửa localhost và db và password db
Vào app/providers/appserviceprovider.php comment toàn bộ code trong hàm boot lại
### b5: chạy lệnh composer install trong terminal
mở lại comment
### b6: sau đó chạy
php artisan key:generate
php artisan migrate:fresh --seed


# Cài đặt lên máy chủ
cp .env.example .env
Sửa thông tin cấu hình file .env


composer install --optimize-autoloader --no-dev
php artisan key:generate

php artisan migrate -> chạy nhưung không xóa bảng cũ (bổ sung)
php artisan migrate:fresh --seed -> xóa rồi chạy lại từ đầu
thêm --seed ở phía sau thì chạy seeder

chown -R www-data:www-data storage
chown -R www-data:www-data boostrap/cache

ln -s /etc/nginx/sites-available/lichcongtac.ivinh.com /etc/nginx/sites-enabled/lichcongtac.ivinh.com
service nginx restart

# Tạo bảng trong database và tạo nova
- Tạo model

php artisan make:model Loaidiaban -m

- Tạo bảng

php artisan migrate

- Tạo Resource

php artisan nova:resource Loaidiaban

# Tạo dữ liệu mẫu

php artisan make:seeder UserSeeder

- Khai báo trong database seeder

Làm sao để tạo dữ liệu mẫu có liên kết???

Tạo các bảng liên kết trước sau đó tạo id dự đoán


# Đổi tên menu trong dashboard nova
public static function label()
{
return 'Loại địa bàn';
}
public static function singularLabel()
{
return 'Loại địa bàn';
}

Xóa các bảng tạo lại

php artisan migrate:fresh --seed

# Ket noi api

https://laravel.com/docs/8.x/http-client#introduction
Tao command
php artisan make:command TestViberApi

Chay thu comand
php artisan mv:testviberapi

# Copy app sang github mới
- khi coppy thư mục
- xóa thư mục vedor
- hạy composer install

# cài đặt máy lần đầu
B1: clone code trên git
b2: mở terminal, cd vào thư mục
chạy: valet link csdlhdnd(tên miền)
mở notepad run adm thay (thêm) tên mền trong host
b3: tạo database (tạo trùng tên vs tên miền)
b4: copy file env.examble thành 1 file env
chỉnh sửa localhost và db và password db
b5: chạy lệnh composer install trong terminal
b6: sau đó chạy
php artisan key:generate
php artisan migrate --seed

# Các bước làm dự án

# Bước 1: Phân tích dự án

-Tên môdun: NhaTho
Ten :text
diachi :text
xa,thon,huyen,tinh: text
kinhdo,vido: text

- modun Kinhthanh
  Ten :text
  noidung :text
  theloai:text

-modun Amnhac
Ten: text
noidung:audio
loinhac: text
theloai: text

-modun Lichle
-Ten: text
-thoigianbd: datetime
-thoigiankt: datetime
-diachi: nhatho_id
-noidung: text

# Bước 2: Viết Controller/Route/View

# Module nhatho
- Ảnh Image
- Heading Text
- Description Text
- URL Text

## B1: Tạo model
php artisan make:model -h mfsc
-xem cấu trú
php artisan make:model Nhatho -mfsc
-m tạo kèm 1 migration
-c tạo kèm 1 controller (chỉ tạo nếu ở frontend có 1 trang riêng. trowngf hợp nàu không cần
php artisan make:model nhatho -m

## B2: Khai báo bảng db trong file migration https://laravel.com/docs/8.x/migrations#columns

## B3: chạy migrate
php artisan migrate

Nếu cần chỉnh lại thì
php artisan migrate:rollback
Sau đó
php artisan migrate

## B4: Tạo nova resouce
php artisan nova:resource Nhatho

http://mvcms.test/nova/resources/sliders

Khai báo các field https://nova.laravel.com/docs/3.0/resources/fields.html


# rết lại toàn bộ dữ liệu
php artisan migrate:fresh --seed
#tk đăng nhập
admin@mayviet.net/secret
editor@mayviet.net/secret
author@mayviet.net/secret


# Tạo dữ liệu mẫu

php artisan make:seeder UserSeeder

Khai báo trong database seeder
public function run()
{[
[
'name' => 'Tố cáo',

        ],
        [
            'name' => 'Khiếu nại',
            
        ],
    ]}

# Thêm sửa xóa database
chạy php artisan make:migration create_tenbang_table




Schema::table('tenbang', function (Blueprint $table) {
$table->foreignId('address_ward_id')->after('diachi')->nullable();
$table->dropColumn('tinh');
$table->dropColumn('huyen');
$table->dropColumn('xa');
});

# upload lên website


1. SSH vào server
   ssh mayviet@221.132.29.123
   Nếu hỏi pass thì gõ passphrase của ssh key tạo hôm qua

2. Vào thư mục dự án
   cd sites/nhathoconggiaovietnam.com

3. Pull code
   git pull

mayviet
0f39120dd7d58d499c79f05d13f22a385c68f54e

4. Chạy composer install nếu trong trường hợp có cài thêm package (ví dụ như filepond)
   composer install --optimize-autoloader --no-dev

5. Import DB từ file sql để ở trong thư mục db (lưu ý là sẽ ghi đè)
   mysql -umayviet -p nhathoconggiaovietnam < db/tenfile.sql

Hỏi pass gõ: 6dKzkBB2rJHxwka4jhd@DMtYD

6. Copy file ảnh ở trong thư mục public để ở trong thư mục db nếu có push ảnh lên
   cp db/public/* storage/app/public

Chạy lệnh
sudo chown -R www-data:www-data storage

Hỏi pass gõ: b8ptjzsU2dQ7j3
macbook: 18836

# Sửa trường input nova
b2: chạy php artisan nova:field mayviet/giaophan-field (chọn yes)
b1: trong migrate không khai báo biến , trong nova khai báo
use Mayviet\NovaVietnamAddressField\NovaVietnamAddressField;
NovaVietnamAddressField::make('Tỉnh', 'address_ward_id')->regions(config('tinhthanh'))->rules('required'),
b2: vào nova-components/tên file/js/components tên file để xem sửa code/
vào nova-components/tên file/src để xem biến truyền vào
b3: cd vào nova-component/tenfile/
b4: chạy yarn  . chay yarn watch để code
b5:  chạy yarn production

# Hành động sau một sự kiện. (laravel)
Ví dụ sự kiện cho Nhatho model
php artisan make:observer NhathoObserver --model=Nhatho

Sau đó mở file App/Observers/NhathoObserver.php

Sẽ có các sự kiện created, updated, deleted, forceDeleted
https://laravel.com/docs/8.x/eloquent#observers

vào Providers/EventServiceProvider/

Thêm
use App\Observers\CongviecObserver;
use App\Models\Congviec;
public function boot()
{
Congviec::observe(CongviecObserver::class);
}

# Thêm nút mới cho nova
Đầu tiên tạo 1 action https://nova.laravel.com/docs/3.0/actions/defining-actions.html

Sau đó cài package: https://novapackages.com/packages/pdmfc/nova-action-button
Để thực hiện action khi ấn nút ở 1 hàng trong bảng

Tạo nút nhắn 1 hoặc nhiều nhóm
-php artisan nova:action Tentruong
-vào nova/action/... để code
-vào model tương ứng của đối tượng cần thêm active thêm :
protected $fillable = [
'active'
];
-vào nova tương ứng của đối tượng cần thêm active thêm :
use App\Nova\Actions\smszalo;
thêm dưới function action
public function actions(Request $request)
{
return [
new smszalo
];
}
-thêm để tạo 1 cột nút ấn
ActionButton::make('Action')
->action(smszalo::class, $this->id)

# Menu nâng cao trên Nova
https://novapackages.com/packages/digital-creative/collapsible-resource-manager

b1: chạy composer require digital-creative/collapsible-resource-manager

b2 :vào nova/Providers/NovaServiceProvider thêm
public function tools()
{
return [
// ...
new CollapsibleResourceManager([
'navigation' => [
TopLevelResource::make([
'label' => 'Resources',
'resources' => [
\App\Nova\User::class
]
]),
]
])
];
}

Xem mẫu trong mvcms

# Mẫu form theo grid
https://novapackages.com/packages/codenco-dev/nova-grid-system

b1: chạy composer require codenco-dev/nova-grid-system

b2: thêm   
-use CodencoDev\NovaGridSystem\NovaGridSystem;
-new NovaGridSystem   
vào NovaServiceProvider.php



# Upload nhiều file
Thư viện: upload file
tải file :https://novapackages.com/packages/digital-creative/nova-filepond




# Multiselect
B1: chạy composer require optimistdigital/nova-multiselect-field

trong csdl bảng cần liên kết:  $table->foreignId('danhba_id')->nullable();

b2: Tạo 1 bảng nối giữa  bảng cần liên kết : php artisan make:migration create_tenbang_tenbang_table (ten bảng theo thứ tự abc)
nội dung bảng :
Schema::create('danhba_lichcongtac', function (Blueprint $table) {
$table->unsignedBigInteger('danhba_id');
$table->unsignedBigInteger('lichcongtac_id');
$table->foreign('danhba_id')->references('id')->on('danhbas');
$table->foreign('lichcongtac_id')->references('id')->on('lichcongtacs');
$table->unique(['danhba_id', 'lichcongtac_id']);
});

use OptimistDigital\MultiselectField\Multiselect;

b3 nova :  Multiselect::make('Danh bạ', 'danhba')
->belongsToMany(\App\Nova\Danhba::class)->clearOnSelect(),

b4 model:  public function danhba()
{
return $this->belongsToMany(Danhba::class);
}






    