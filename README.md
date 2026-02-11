# Manual del usuario - Proyecto AlmaGest (Entrega 4)

Este documento detalla el funcionamiento de la API RestFul y las vistas de comprobacion de la gestion del almacen.

## 1. Requisitos previos
* Servidor MySQL activo (XAMPP).
* Servidor de Laravel iniciado (`php artisan serve`).
* Compilacion de assets activa (`npm run dev`).

---

## 2. Autentificacion
Para acceder a ala gestion de pedidos, albaranes y facturas, es necesario estar autentificado.

### 2.1 Registro de Usuario
* **Endpoint:** `POST /api/register`
* **Campos:** `firstname`, `secondname`, `email`, `password`, `password_confirmation`, `company_id`.
* **Respuesta:** mensaje: `User registered successfully`, usuario y status 201.

CAPTURA

### 2.2 Login de usuario y obtencion del token
* **Endpoint:** `POST /api/login`
* **Campos:** `email`, `password`.
* **Respuesta:** obtencion del `access_token`.

CAPTURA

---

## 3. Guia de EndPoints (Postman)
Todas estas acciones requieren el Bearer Token en la pestaña de Authorization.

### 3.1 Pedidos
* **Endpoint (Ver):** `GET /api/orders/{id}`
    * **Campos:** Ninguno (ID en la URL).
    * **Respuesta:** JSON con los datos del pedido.
* **Endpoint (Crear):** `POST /api/orders`
    * **Campos:** `number`, `order_date`, `company_id`.
    * **Respuesta:** JSON con el pedido creado y status 201.

### 3.2 Albaranes
* **Endpoint (Eliminar):** `DELETE /api/deliverynotes/{id}`
    * **Campos:** Ninguno (ID en la URL).
    * **Respuesta:** Mensaje: `Albarán eliminado correctamente`.
* **Endpoint (Firma y Borrado):** `POST /api/deliverynotes/sign/{id}`
    * **Campos:** Ninguno (Se envía via POST para simular proceso de firma).
    * **Respuesta:** Mensaje: `Albarán eliminado correctamente`.

### 3.3 Facturas
* **Endpoint (Ver):** `GET /api/invoices/{id}`
    * **Campos:** Ninguno (ID en la URL).
    * **Respuesta:** JSON con los datos de la factura y su albarán.
* **Endpoint (Actualizar):** `PUT /api/invoices/{id}`
    * **Campos:** `num`, `issuedate`, `delivery_note_id`.
    * **Respuesta:** Mensaje: `Invoice updated successfully` y objeto actualizado.
* **Endpoint (Eliminar):** `DELETE /api/invoices/{id}`
    * **Campos:** Ninguno (ID en la URL).
    * **Respuesta:** Mensaje: `Invoice deleted successfully`.

---

## 4. Vistas de comprobacion (Navegador)
Se han habilitado rutas web para visualizar los datos en tablas según los requisitos del proyecto:

* **Inicio de sesion:** /login - (Muestra: Nº Pedido, Nº Albarán y Fecha).
* **Registro:** /register - (Muestra: Nº Albarán, Nº Factura y Fecha).

* **Pedidos:** /orders-view - (Muestra: numero, fecha y empresa).
* **Alabaranes:** /deliverynotes-view - (Muestra: Nº Pedido, Nº Albarán y Fecha).
* **Facturas:** /invoices-view - (Muestra: Nº Albarán, Nº Factura y Fecha).

CAPTURAS
