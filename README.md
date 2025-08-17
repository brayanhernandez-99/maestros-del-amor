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

Este proyecto incluye un entorno de desarrollo completo con **PHP + Apache + MySQL + phpMyAdmin**, gestionado con **Docker** y **Docker Compose**.

## 📦 Requisitos previos

- [Docker](https://www.docker.com/get-started) instalado.
- [Docker Compose](https://docs.docker.com/compose/install/) instalado.

---

## ▶️ Pasos para ejecutar el proyecto

- Construir las imágenes desde cero: Fuerza la reconstrucción completa de las imágenes usando el Dockerfile.
    ```bash
    docker-compose build --no-cache
    ```

- Levantar los contenedores
    Inicia los servicios en segundo plano (modo detach).
    Esto levantará:
    - PHP + Apache → http://localhost:8080
    - phpMyAdmin → http://localhost:8081
    - MySQL en el puerto 3306
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

---

## ℹ️ Notas importantes
Si realizas cambios en el Dockerfile o en el docker-compose.yml, ejecuta:
```bash
docker-compose down
docker-compose build --no-cache
docker-compose up -d
```
Credenciales phpMyAdmin:
- Usuario: root
- Contraseña: root
