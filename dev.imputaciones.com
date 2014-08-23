<VirtualHost dev.imputaciones.com:80>
    ServerAdmin yuliusvk@gmail.com.com
    DocumentRoot "C:/Ficheros/DEV/Web/imputaciones/web/"
    ServerName dev.imputaciones.com
    ServerAlias dev.imputaciones.com
    ErrorLog "logs/dev.imputaciones.com-error.log"
    CustomLog "logs/dev.imputaciones.com-access.log" common
	<Directory "C:/Ficheros/DEV/Web/imputaciones/web/">
		Options Indexes FollowSymLinks MultiViews
		AllowOverride all
		Order Allow,Deny
		Allow from All
	</Directory>
</VirtualHost>