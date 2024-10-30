<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
</p>

## Todo List Uygulaması Hakkında

Bu proje, kullanıcıların günlük görevlerini yönetmelerini sağlamak için geliştirilmiş bir **Todo List** uygulamasıdır. Laravel çerçevesi kullanılarak oluşturulmuş olup, kullanıcı dostu bir arayüze ve güçlü bir özellik setine sahiptir.

### Temel Özellikler

- **Görev Yönetimi**: Kullanıcılar, yeni görevler ekleyebilir, mevcut görevleri düzenleyebilir ve silebilir.
- **Tamamlanma Durumu**: Kullanıcılar görevlerin tamamlanma durumunu takip edebilir ve güncelleyebilir.
- **Responsive Tasarım**: Mobil ve masaüstü cihazlarda uyumlu çalışan modern bir tasarım.
- **Hata Yönetimi**: Görev ekleme veya düzenleme sırasında hata durumları kullanıcıya bildirilir.
- **Sayfalama**: Görevler sayfalandırılarak daha iyi bir kullanıcı deneyimi sağlanır.

## Kullanılan Teknolojiler

- **Laravel**: PHP için güçlü ve modern bir web uygulama çerçevesi.
- **Bootstrap**: Responsive ve estetik bir tasarım için kullanılan CSS çerçevesi.
- **MySQL**: Verilerin güvenli bir şekilde saklandığı veritabanı yönetim sistemi.

## Kurulum Rehberi

Projeyi yerel ortamınızda çalıştırmak için aşağıdaki adımları izleyin:

1. **Depoyu Klonlayın**: <br />
   ```bash
   git clone https://github.com/kullaniciadi/todo-list.git

2. **Proje Dizinie Geçin**: <br />
    ```bash
    cd todo-list

3. **Gerekli Paketleri Yükleyin**: <br />
   ```bash
   composer install

4. **.env Dosyasını Oluşturun:**: <br />
    ```bash
   cp .env.example .env

5. **Veritabanı Ayarlarını Yapın: .env dosyasını açarak veritabanı bilgilerinizi güncelleyin. Örneğin:**: <br />
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=to-do-app-laravel
   DB_USERNAME=root
   DB_PASSWORD=

6. **Veritabanı Migrasyonlarını Çalıştırın**: <br />
    ```bash
    php artisan migrate

7. **Uygulamayı Çalıştırın**: <br />
   ```bash
   php artisan serve

# Kullanım Talimatları
- **Ana Sayfa**: Görevlerinizi burada görüntüleyebilir ve yeni görevler ekleyebilirsiniz.<br />
- **Görev Ekleme**: "Todo Ekle" butonuna tıklayarak yeni bir görev oluşturun.<br />
- **Görev Düzenleme**: Mevcut bir görevi düzenlemek için "Düzenle" butonuna tıklayın.<br />
- **Görev Silme**: Silmek istediğiniz görevin yanındaki "Sil" butonuna tıklayarak silme işlemini onaylayın.<br />
- **Tamamlanma Durumu**: Görevlerin tamamlanma durumunu güncelleyebilirsiniz.<br />
   
# Katkıda Bulunma:
Projeye katkıda bulunmak için:

- Depoyu fork edin.<br />
- Yeni bir özellik ekleyin veya hata düzeltin.<br />
- Değişikliklerinizi commit edin.<br />
- Pull request gönderin.<br />

## Lisans:
Bu proje MIT lisansı altında lisanslanmıştır.


## İletişim:
Herhangi bir sorunuz veya öneriniz varsa, benimle iletişime geçmekten çekinmeyin:

E-posta: tuananuryalcin72@gmail.com<br/>
GitHub: tuananur

## İndex Sayfası:
![index](https://github.com/user-attachments/assets/237c4495-021e-4de8-9e1c-17e47033544c)

## Düzenleme Sayfası:
![düzenleme](https://github.com/user-attachments/assets/f0e4ce36-ec8b-47a3-8616-8ebbb3478c96)

## Ekleme Sayfası:
![index](https://github.com/user-attachments/assets/e9ef47ef-edd1-443e-8ee3-ebf952a6a9c0)
![eklendi](https://github.com/user-attachments/assets/cd6d810c-aeda-42f4-a9fe-0eb4d25ddb63)

## Silme Sayfası:
![sil](https://github.com/user-attachments/assets/eedf34c8-468a-40a5-ba3b-f7fed51feb39)


