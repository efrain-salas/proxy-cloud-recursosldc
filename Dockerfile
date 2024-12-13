# Usa la imagen oficial de Nginx
FROM nginx:latest

# Copia el archivo de configuración a la ruta adecuada en la imagen
COPY nginx.conf /etc/nginx/nginx.conf

# Exponer el puerto 80
EXPOSE 80
