# 📦 Proyecto EnviExpress (Laravel 10 + Jetstream + Tailwind)

## 🚀 Requisitos previos
- PHP >= 8.1  
- Composer  
- MySQL o MariaDB  
- Node.js + NPM  
- Laravel CLI  

---

## ⚙️ Instalación del proyecto

### 1. Crear proyecto Laravel
```bash
composer create-project laravel/laravel enviiexpress
cd enviiexpress
```

### 2. Instalar Jetstream (con Livewire)
```bash
composer require laravel/jetstream
php artisan jetstream:install livewire
npm install && npm run build
```

### 3. Configurar base de datos
En `.env` ajusta la conexión:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=enviiexpress
DB_USERNAME=root
DB_PASSWORD=
```

Crea la base de datos en MySQL:
```sql
CREATE DATABASE enviiexpress;
```

---

## 📑 Migraciones y modelos

### 4. Crear migraciones
Puedes usar el SQL generado previamente (`enviiexpress_full.sql`) o las migraciones de Laravel.  
Si usas el SQL:
```bash
mysql -u root -p enviiexpress < database/seeders/sql/enviiexpress_full.sql
```

### 5. Generar modelos con Reliese
```bash
composer require reliese/laravel --dev
php artisan vendor:publish --tag=reliese-models
php artisan code:models --connection=mysql
```

---

## 🌱 Seeders de prueba

### 6. Usar Seeder con datos de ejemplo
En `database/seeders/EnviExpressSeeder.php` ya están cargados **10 registros por cada entidad (13 tablas)**.  

Ejecuta:
```bash
php artisan db:seed --class=EnviExpressSeeder
```

---

## 🛠️ Controladores, Vistas y Rutas

### 7. Copiar controladores
Coloca los controladores del paquete `controllers_with_index.zip` en:  
`app/Http/Controllers/`

Cada uno ya tiene el método `index`.

### 8. Copiar vistas
Coloca las vistas de `views_tables_tailwind.zip` en:  
`resources/views/{entidad}/index.blade.php`

### 9. Configurar rutas
Reemplaza tu `routes/web.php` con el archivo `web_with_resources.php`.

---

## 🖥️ Menú de navegación

En `resources/views/layouts/navigation-menu.blade.php` agrega el menú completo con enlaces a los 13 módulos.  

Ejemplo:
```blade
<x-nav-link href="{{ route('usuarios.index') }}" :active="request()->routeIs('usuarios.*')">
    {{ __('Usuarios') }}
</x-nav-link>
<x-nav-link href="{{ route('pedidos.index') }}" :active="request()->routeIs('pedidos.*')">
    {{ __('Pedidos') }}
</x-nav-link>
...
```

---

## ▶️ Ejecutar la aplicación

### 10. Levantar servidor
```bash
php artisan serve
```

Abre en el navegador:  
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

Inicia sesión y accede al menú superior para navegar entre:  
- Usuarios  
- Pedidos  
- Asignaciones  
- Guías  
- Permisos  
- Personas  
- Empleados  
- Vehículos  
- Mensajeros  
- Ubicaciones  
- Roles-Permisos  
- Roles  
- Tarifas  

---

✅ Con esto tendrás un proyecto **completo, robusto y navegable** con los **13 módulos de EnviExpress**.
