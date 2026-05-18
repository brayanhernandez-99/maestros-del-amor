# 📌 Descripción del Proyecto

Este proyecto es una aplicación web sencilla desarrollada utilizando **PHP**, **HTML** y **CSS**.
El objetivo principal es demostrar la integración de un backend básico con PHP y una interfaz de usuario estilizada con HTML y CSS.

## ✨ Características

- 🌐 **Frontend**: Construido con **HTML5** y **CSS3** para una estructura moderna y responsiva.
- ⚙️ **Backend**: Implementado en **PHP** para procesar datos dinámicos y generar contenido automáticamente.
- 🖌️ **Estilizado**: Diseño limpio y minimalista para mejorar la experiencia de usuario.
- 📅 **Funciones dinámicas**: Ejemplos como mostrar la fecha actual, procesar formularios, mostrar mensajes personalizados, entre otros.

## 🛠️ Tecnologías utilizadas

- **HTML5** → estructura del contenido web.
- **CSS3** → diseño y presentación visual.
- **PHP** → lógica de servidor y generación dinámica de contenido.

---

# 🚀 Levantar el Proyecto con Docker

Este proyecto incluye un entorno de desarrollo completo con **PHP + Apache**, gestionado con **Docker** y **Docker Compose**.

> 💡 **MySQL y phpMyAdmin están comentados** en `docker-compose.yml` porque no se usan actualmente. Si los necesitás en el futuro, solo descomentalos.

## 📦 Requisitos previos

- [Docker](https://www.docker.com/get-started) instalado.
- [Docker Compose](https://docs.docker.com/compose/install/) instalado.

---

## 🔐 Configuración del archivo .env

El proyecto requiere un archivo `.env` en la raíz con las variables de entorno necesarias.

**1. Copiá el ejemplo:**
```bash
cp .env.example .env
```

**2. Editá los valores según tu entorno:**
```env
APP_URL=https://maestrosdelamor.local

# DB_HOST=mysql
# DB_NAME=mydb
# DB_USER=root
# DB_PASS=root

WHATSAPP_PHONE=+57123456789
```

> ⚠️ **Nunca compartas el archivo `.env`**. Ya está incluido en `.gitignore` para evitar que se suba al repositorio.

### Producción (sin Docker)

En un servidor Apache, podés pasar estas variables de dos formas:

**Opción A - En el VirtualHost:**
```apache
SetEnv APP_URL https://tudominio.com
# SetEnv DB_HOST localhost
# SetEnv DB_NAME maestros
# SetEnv DB_USER tu_usuario
# SetEnv DB_PASS tu_password_seguro
SetEnv WHATSAPP_PHONE +57123456789
```

**Opción B - En `.htaccess`:**
```apache
SetEnv APP_URL https://tudominio.com
# SetEnv DB_HOST localhost
# SetEnv DB_NAME maestros
# SetEnv DB_USER tu_usuario
# SetEnv DB_PASS tu_password_seguro
SetEnv WHATSAPP_PHONE +57123456789
```

---

## ▶️ Pasos para ejecutar el proyecto

- Construir las imágenes desde cero: Fuerza la reconstrucción completa de las imágenes usando el Dockerfile.
    ```bash
    docker-compose build --no-cache
    ```

- Levantar los contenedores
    Inicia los servicios en segundo plano (modo detach).
    Esto levantará:
    - PHP + Apache → https://maestrosdelamor.local
    ```bash
    docker-compose up -d
    ```

- Detener los contenedores: Detiene y elimina los contenedores, redes y volúmenes temporales.
    ```bash
        docker-compose down
    ```

- Sirve para ejecutar comandos en el contenedor, esto te abre una terminal dentro del contenedor.
    ```bash
        docker exec -it maestros-del-amor bash
    ```

- Ese un comando que te va a mostrar en tiempo real los logs del contenedor.
    ```bash
        docker logs -f maestros-del-amor
    ```

---

## ℹ️ Notas importantes
Si realizas cambios en el Dockerfile o en el docker-compose.yml, ejecuta:
```bash
docker-compose down
docker-compose build --no-cache
docker-compose up -d
```
