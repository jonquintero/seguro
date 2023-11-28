## Generador QR

Aplicacion web desarrollada con Laravel, que se conecta a un api externo y con la data de respuesta genera un codigo QR

## Installation

Clonar el repositorio a su local:

```sh
git clone https://github.com/jonquintero/sinriesgo.git
cd sinriesgo
```

Instalar dependencias PHP:

```sh
composer install
```

Copiar archivo de entorno:

```sh
cp .env.example .env
```

Generar el  application key:

```sh
php artisan key:generate
```

Compilar el front:

```sh
npm run dev
```

Puede ejecutar en otra consola el siguiente comando:

```sh
php artisan serve
```
Si tiene configurado un virtualhost puede acceder a su ruta web.


Archivos Trabajados:
- **[QrGenerateController.php](https://github.com/jonquintero/sinriesgo/blob/72e36f274d0951dd407dac6333ee0feb71eb05d7/app/Http/Controllers/QrGenerateController.php)**
- **[UpsertQrGenerateRequest.php](https://github.com/jonquintero/sinriesgo/blob/72e36f274d0951dd407dac6333ee0feb71eb05d7/app/Http/Requests/UpsertQrGenerateRequest.php)**
- **[QrGenerateData.php](https://github.com/jonquintero/sinriesgo/blob/72e36f274d0951dd407dac6333ee0feb71eb05d7/app/DataTransferObjects/QrGenerateData.php)**
- **[UpsertQrGenerateAction.php](https://github.com/jonquintero/sinriesgo/blob/72e36f274d0951dd407dac6333ee0feb71eb05d7/app/Actions/UpsertQrGenerateAction.php)**
- **[QrImageHelper.php](https://github.com/jonquintero/sinriesgo/blob/72e36f274d0951dd407dac6333ee0feb71eb05d7/app/Helpers/QrImageHelper.php)**
- **[QrService.php](https://github.com/jonquintero/sinriesgo/blob/72e36f274d0951dd407dac6333ee0feb71eb05d7/app/Services/QrService.php)**
