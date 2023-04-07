# TEMPLATE SITO

### 1° Installa template
```bash
  gh repo clone wonder-image/new
```

### 2° Aggiorna APP
```bash
  composer update wonder-image/app
  composer dump-autoload
```

### 3° Installa/Aggiorna APP
Digita sulla barra di ricerca nomedominio.it/update/

### 4° Personalizza file .env
Per iniziare il nuovo sito dovrai specificare: `APP_DEBUG` `APP_URL` `ASSETS_VERSION` 

Collegarti al database: `DB_HOSTNAME` `DB_USERNAME` `DB_PASSWORD` `DB_DATABASE`

Specificare credenziali accesso: `USER_NAME` `USER_SURNAME` `USER_EMAIL` `USER_USERNAME` `USER_PASSWORD`

### 5° Personalizza
Digita sulla barra di ricerca nomedominio.it/backend/
