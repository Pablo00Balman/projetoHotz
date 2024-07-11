# Desafio Hotz

Um projeto em Laravel de consulta a um banco de dados com informação de pacientes de um hospital. 

## Processo de configuração do banco de dados

Todos os dados dos pacientes estavam espalhados em arquivos .txt. Para colocar um banco de dados mySql para funcionar com todas essas centenas de dados, construí um script em C que lê os arquivos .txt e os converte para mySql. O script pode ser encontrado neste repositório com o nome de txtToSql.c. Os arquivos gerados por este script estão salvo no subdiretório chamado "sql".

## Demo

Atualmente o projeto se parece com isto:

![alt text](https://raw.githubusercontent.com/Pablo00Balman/Employees-Project/main/demo.png)

