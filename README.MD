
# API Univates

Projeto feito em Adianti Framework para o processo seletivo da Univates.


## Instalação

Primeiro baixe um servidor Apache(Wamp ou xampp)

Após instalado o servidor apache, entre na pasta www

Em seguida clone o projeto e acesse a pasta dele
```bash
  git clone https://github.com/oarthurdev/api-univates
  cd api-univates
```

Installe o composer
```bash
https://getcomposer.org/Composer-Setup.exe
```

Após isso instale as dependências

```bash
  composer install
```

Arquivo de configuração do banco de dados.

```bash
  phinx.php
```

Execute as migrates com o comando abaixo, na pasta no projeto.

```bash
  vendor/phinx/bin migrate
```

Após tudo isso, inicie o servidor apache.



## Documentação da API

#### Retorna todas as pessoas

```http
  GET /persons
```

#### Retorna uma pessoa

```http
  GET /persons/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID da pessoa |


#### Cadastra uma pessoa
```http
  POST /persons
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `name`      | `string` | **Obrigatório**. O Nome da pessoa |
| `birth_date`      | `string` | **Obrigatório**. A data de nascimento da pessoa |
| `cpf`      | `string` | **Obrigatório**. O CPF da pessoa |
| `sex`      | `string` | **Obrigatório**. O Sexo da pessoa |
| `phone`      | `string` | **Obrigatório**. O Telefone da pessoa |
| `email`      | `string` | **Obrigatório**. O Email da pessoa |

#### Deleta todas as pessoas
```http
  DELETE /persons
```
#### Deleta uma pessoa
```http
  DELETE /persons/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID da pessoa |


#### Atualiza o registro de uma pessoa
```http
  PUT /persons
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `name`      | `string` | **Obrigatório**. O Nome da pessoa |
| `birth_date`      | `string` | **Obrigatório**. A data de nascimento da pessoa |
| `cpf`      | `string` | **Obrigatório**. O CPF da pessoa |
| `sex`      | `string` | **Obrigatório**. O Sexo da pessoa |
| `phone`      | `string` | **Obrigatório**. O Telefone da pessoa |
| `email`      | `string` | **Obrigatório**. O Email da pessoa |



## Autores

- [@oarthurdev](https://www.github.com/oarthurdev)

