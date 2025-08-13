# Madefroni - Sistema Web de Venta Mayorista de Maderas

![Madefroni](ruta-a-una-imagen.png) <!-- Reemplazá con captura real de tu web -->

---

## 🔹 Descripción
Madefroni es una página web desarrollada para la empresa **Madefroni**, especializada en la **venta mayorista de maderas**.  
Permite a los usuarios navegar por el catálogo, crear cuentas, gestionar su carrito y realizar pedidos vía WhatsApp.  
Los administradores pueden gestionar productos, usuarios y revisar el historial de compras.  

---

## 🛠 Tecnologías
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

---

## ⚡ Funcionalidades

### Usuarios
- Visualizar catálogo sin iniciar sesión.  
- Crear cuentas para poder comprar.  
- Añadir productos al carrito y modificar cantidades.  
- Realizar pedidos: al seleccionar el método de pago, el usuario es redirigido a WhatsApp con los detalles de la compra.

### Administradores
- Panel de administración protegido por login.  
- Gestionar productos: agregar, editar y eliminar.  
- Gestionar usuarios: ver cuentas registradas y eliminar si es necesario.  
- Ver historial de compras de todos los usuarios.  
- Controlar número de usuarios registrados y actividad de la tienda.

---

## 🚀 Instalación Local

1. Instalar un servidor local: **XAMPP** o **WAMP**.  
2. Colocar la carpeta `madefroni` dentro de `htdocs`.  
3. Crear una base de datos en phpMyAdmin (por ejemplo `madefroni_db`).  
4. Crear `database/conexion.php` con tus credenciales locales:

```php
<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "madefroni_db";
