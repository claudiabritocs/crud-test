# crud-test
Teste CRUD com API Laravel
Feito por: Cláudia Brito Caldeira Soares

Versões utilizadas para o projeto: 
PHP: 7.4
Laravel: 8
Postman: 9.13


| Introdução |

Olá, muito prazer! Antes de iniciar o passo-a-passo de como utilizar
o programa, convido vocês a darem uma olhada no vídeo que eu preparei
mostrando como o programa funciona! O link dele é este aqui:

https://youtu.be/jcSYakRSLuo

Espero que ele ajude na compreensão do CRUD e do API! :D

Sem maiores delongas, abaixo segue o procedimento para o funcionamento
do CRUD em sua máquina!

Obrigada para quem viu até aqui! ;)


| Como Proceder |

Observação inicial:
Ao abrir o projeto, tenha certeza de estar dentro da pasta crud-test (.../crud-test/crud-test)!

Login: claudiabrito.pro@gmail.com
senha: testecrud123

Banco de dados: mysql
HOST: Localhost (127.0.0.1)
Porta: 3306
Nome do banco: crudtest
Username: root
Senha: (em branco)

Requisitos:
composer install
php artisan migrate
php artisan key:generate
php artisan db:seed

API Endpoints:
Method: GET http://127.0.0.1:8000/api/solicitar-produtos
Method: PUT http://127.0.0.1:8000/api/baixar-produtos/1
Method: PUT http://127.0.0.1:8000/api/adicionar-produtos/1

