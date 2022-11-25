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
