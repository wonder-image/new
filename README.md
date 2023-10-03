# CONFIGURAZIONE



## AMBIENTE


### 1° Crea account CPanel


### 2° Effettua check
 - Certificato SSL
 - SSL Status
 - Redirect HTTPS
 - Versione PHP 8.2
 - PHP Extensions
   - imagick: `true`
   - geoip: `true`
   - mysqli: `true`
 - PHP Options
   - display_errors: `true`
   - memory_limit: `2048M`
   - post_max_size: `512M`
   - short_open_tag: `true`
   - upload_max_filesize: `1G`
 
 
### 3° Crea
 - Account FTP
 - Database `_main` `_stats`
 - Account database
 - Aggiungi utente a database



## APP


### 1° Installa template

Crea una cartella con il `nome azienda` aprila con VSCode, successivamente vai su `nuovo terminale` e esegui il seguente comando:

```bash
  gh repo clone wonder-image/new
```
Estrapola i file dalla cartella `new` e elimina il file `README.md`. Rinomina la cartella `site_name` con il nome del dominio e compila il file `INFO.md`. 


### 2° Aggiorna APP
```bash
  composer update wonder-image/app
  composer dump-autoload
```


### 3° Personalizza file .env
Per iniziare il nuovo sito dovrai specificare: `APP_DEBUG` `APP_URL` `ASSETS_VERSION` 

Collegarti al database: `DB_HOSTNAME` `DB_USERNAME` `DB_PASSWORD` `DB_DATABASE`

Specificare credenziali accesso: `USER_NAME` `USER_SURNAME` `USER_EMAIL` `USER_USERNAME` `USER_PASSWORD`


### 4° Personalizza sftp.json
Inserisci le credenziali FTP per accedere al file manager


### 5° Installa/Aggiorna APP
Digita sulla barra di ricerca nomedominio.it/update/


### 6° Personalizza
Digita sulla barra di ricerca nomedominio.it/backend/

Username: `USER_USERNAME`

Password: `USER_PASSWORD`

### 7° CronJob
Crea i seguenti cronjob:
 - Creazione sitemap
   ```bash
   /api/task/sitemap.php
   ```
 - Statistiche orarie 
   ```bash
   /api/task/stats/hourly.php
   ```
 - Statistiche giornaliere 
   ```bash
   /api/task/stats/daily.php
   ```
 - Statistiche mensili 
   ```bash
   /api/task/stats/monthly.php
   ```

