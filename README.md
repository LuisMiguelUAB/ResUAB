# Intranet UAb (CI4)

Skeleton para desenvolvimento de projetos de estágio baseados em [CodeIgniter 4](https://codeigniter.com) na [UAb](https://www.uab.pt).

## Requisitos do servidor

PHP versão 8.1 ou mais recente com as seguintes extensões PHP instaladas/ativas:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [zip](http://php.net/manual/en/zip.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- [libcurl](http://php.net/manual/en/curl.install.php)

## Instalação e atualização

Na pasta raiz do servidor web onde será disponibilizada a solução executar `git clone git@github.com:universidade-aberta/intranet-uab-pt--module-resuab.git intranet-uab-pt`. Alternativamente, descarregar o ficheiro ZIP com o projeto, extrair a pasta para a raiz do servidor web e renomear a pasta para `intranet-uab-pt`.

No terminal de comandos e dentro da pasta extraída executar o comando `composer install` (nota: requer o [composer](https://getcomposer.org/)).

Duplicar o ficheiro `env` para `.env` e personalizar as definições da aplicação. É particularmente importante criar uma base de dados no servidor de MySQL/MariaDB (por exemplo com o nome `intranet-uab-pt_db`) e personalizar as informações de acesso à mesma no ficheiro `.env` criado (por exemplo, `database.default.database` e/ou `database.default.username`).

No terminal de comandos e dentro da pasta extraída, executar o comando `php spark migrate -n "Modules\InventarioEquipamentos"` para criar a(s) tabela(s) necessária(s) para o(s) modelo(s), seguido do comando `php spark db:seed -n "Modules\InventarioEquipamentos\Database\Seeds\EquipamentosSeed"` para criar alguns registos de demonstração (opcional).
