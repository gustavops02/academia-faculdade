# Site de Academia
![html](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) 
![js](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E)
![php](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
> Esse site foi desenvolvido para fins acadêmicos, portanto, não se deve considerar nenhuma informação colocada nas páginas.

<hr>

## Ferramentas utilizadas:
  
  - Front-end:
    - HTML e CSS;
    - JavaScript;
  - Back-end:
    - PHP
  - Bancos de dados:
    - MySQL

Implementação do site para aprimorar os conhecimentos com Desenvolvimento Web. Foi implementado a criação de um CRUD de usuário, onde foi dado um use case para o grupo fazer a aplicação.



### Query para criação da tabela: [^1]

```SQL
CREATE TABLE `Usuario` (
  `RG` int NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `ddd_tel_fixo` int DEFAULT NULL,
  `ddd_tel_cel` mediumtext,
  `email` varchar(45) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `logradouro` varchar(10) DEFAULT NULL,
  `nome_logradouro` varchar(45) DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `CEP` int DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `tipo_usuario` char(1) DEFAULT NULL,
  `altura` decimal(10,0) DEFAULT NULL,
  `peso` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`RG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

```
