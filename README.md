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
* **Campos:** `firstname`, `secondname`, `email`, `password`, `company_id`.
* **Respuesta:** mensaje: `User registered successfully`, usuario y status 201.



### 2.2 Login de usuario y obtencion del token
* **Endpoint:** `POST /api/login`
* **Campos:** `email`, `password`.
* **Respuesta:** obtencion del `access_token`.

<img width="1810" height="757" alt="image" src="https://github.com/user-attachments/assets/2b47d521-6a0d-4330-9534-7dec088a1a90" />

---

## 3. Guia de EndPoints (Postman)
Todas estas acciones requieren el Bearer Token en la pestaña de Authorization.

### 3.1 Pedidos
* **Endpoint (Ver):** `GET /api/orders/{id}`
    * **Campos:** Ninguno (ID en la URL).
    * **Respuesta:** JSON con los datos del pedido.
 
<img width="1801" height="945" alt="image" src="https://github.com/user-attachments/assets/f9eb0979-c07e-471b-8c12-527df7fa155c" />

* **Endpoint (Crear):** `POST /api/orders`
    * **Campos:** `number`, `order_date`, `company_id`.
    * **Respuesta:** JSON con el pedido creado y status 201.
 
<img width="1800" height="813" alt="image" src="https://github.com/user-attachments/assets/0c9a3619-9ea4-4019-b42b-7ff0fadd9cfe" />

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
 
<img width="1801" height="893" alt="image" src="https://github.com/user-attachments/assets/e8563cad-fa59-48aa-8f4d-d8610ddb6f61" />

* **Endpoint (Actualizar):** `PUT /api/invoices/{id}`
    * **Campos:** `num`, `issuedate`, `delivery_note_id`.
    * **Respuesta:** Mensaje: `Invoice updated successfully` y objeto actualizado.
 


* **Endpoint (Eliminar):** `DELETE /api/invoices/{id}`
    * **Campos:** Ninguno (ID en la URL).
    * **Respuesta:** Mensaje: `Invoice deleted successfully`.
 
<img width="1786" height="730" alt="image" src="https://github.com/user-attachments/assets/67c62561-d5ac-4c30-a732-df5ef96c9e45" />

---

## 4. Vistas de comprobacion (Navegador)
Se han habilitado rutas web para visualizar los datos en tablas según los requisitos del proyecto:

* **Inicio de sesion:** /login - (Muestra: Nº Pedido, Nº Albarán y Fecha).
* **Registro:** /register - (Muestra: Nº Albarán, Nº Factura y Fecha).

* **Pedidos:** /orders-view - (Muestra: numero, fecha y empresa).
* **Alabaranes:** /deliverynotes-view - (Muestra: Nº Pedido, Nº Albarán y Fecha).
* **Facturas:** /invoices-view - (Muestra: Nº Albarán, Nº Factura y Fecha).
