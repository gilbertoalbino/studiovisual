# Teste de Nivelamento

Teste para nivelamento de competências para a Studio Visual.

## Requisito

* Linux
* PHP >= 5.4
* Ext BC Math


## Como Instalar

Certifique-se de ter a extensão `php-bcmath` instalada.

Clone o repositório:

`git clone https://github.com/gilbertoalbino/studiovisual.git`


## Como testar

Acesse a pasta que o Git criou com o nome de `studiovisual` e instale as dependências.

`composer install`


Verifique na pasta `test` que há um teste correspondente para cada questão.

Após fazer a leitura de cada teste, basta executar:

`vendor/bin/phpunit`


E analise se algum teste falhou.
