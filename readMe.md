# **Sistema de Gerenciamento de Alunos, Notas e Salas**
Este projeto é um sistema para cadastrar, editar e visualizar notas de alunos e salas. Desenvolvido em PHP, JavaScript e MySQL, o sistema permite que professores gerenciem as notas dos alunos em diversas disciplinas.
## Funcionalidades
- Cadastro de Alunos
- Edição de Alunos
- Cadastro de Disciplinas
- Edição de Disciplinas
- Registro de Notas por Disciplina
- Edição de Notas
- Visualização das Notas
- cadastro de salas de ensino medio e fundamental

## Pré-requisitos
- [XAMPP](https://www.apachefriends.org/index.html) ou outro servidor local com suporte a PHP e MySQL
- Navegador Web

## Passo a Passo para Rodar o Sistema Localmente
1. Clonar o Repositório
    - Clone o repositório do projeto para o seu ambiente local:
        ```bash
        git clone https://github.com/Gustavo-Vinicius-Santana/notas-alunos-V2
        cd notas-alunos-V2
        ```

2. Configurar o Banco de Dados
    - Abra o painel de controle do XAMPP e inicie os serviços Apache e MySQL.
    - Acesse o phpMyAdmin no navegador através de [http://localhost/phpmyadmin](http://localhost/phpmyadmin).


3. Importar o Banco de Dados
    - No phpMyAdmin, importe o arquivo SQL que está na raiz do projeto (`db_notas_alunos_v2.sql`) para criar as tabelas necessárias.

4. Executar o Projeto
    - Coloque todos os arquivos do projeto na pasta `htdocs` do XAMPP (geralmente localizada em `C:\xampp\htdocs`).
    - Acesse o sistema no navegador através de [http://localhost/notas-alunos-V2](http://localhost/notas-alunos-V2).

5. Usar o Sistema
    - Cadastro de Alunos: Utilize a interface web para cadastrar alunos.
    - Registro e Edição de Notas: Adicione ou edite as notas dos alunos em cada disciplina.
    - Visualização de Boletins: Navegue pelos boletins dos alunos para ver suas notas em todas as disciplinas.
    - cadastre salas e adicione alunos a ela