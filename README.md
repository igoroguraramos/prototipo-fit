## Tecnologias utilizadas

- Laravel (PHP Framework)  
- Vue 3  
- Inertia.js  
- SQLite (banco de dados leve para desenvolvimento)  
- Tailwind CSS (estilização)  

---

## Instruções de instalação e execução

1. Clone o repositório:

```bash
git clone git@github.com:igoroguraramos/prototipo-fit.git
cd prototipo-fit
```

2. Instale as dependências PHP com Composer:

```bash
composer install
```

3. Instale as dependências JavaScript com NPM ou Yarn:

```bash
npm install
# ou
yarn install
```

4. Crie o arquivo de ambiente `.env` baseado no exemplo:

```bash
cp .env.example .env
```

5. Configure o banco SQLite:

- Crie o arquivo do banco dentro da pasta `database`:

```bash
touch database/database.sqlite
```

- No arquivo `.env`, configure a conexão para SQLite e adicione o Sanctum:

```
DB_CONNECTION=sqlite

SANCTUM_STATEFUL_DOMAINS=localhost:5173
SESSION_DOMAIN=localhost
```

> Se estiver rodando local, pode usar caminho relativo:  
> `DB_DATABASE=./database/database.sqlite`

6. Gere a chave da aplicação Laravel:

```bash
php artisan key:generate
```

7. Rode as migrations para criar as tabelas e os seeds:

```bash
php artisan migrate --seed
```

E colar o código acima.

9. Compile os assets front-end rode no terminal 1:

```bash
npm run dev
# ou para modo observador automático
npm run watch
```

10. Rode o servidor local do Laravel no terminal 2:

```bash
php artisan serve
```

---

## Acessando a aplicação

- Abra o navegador em: [http://localhost:8000](http://localhost:8000)  
- Faça login com o usuário padrão:  
  - Email: `igor@example.com`  
  - Senha: `password123`
