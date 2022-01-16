-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.24-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;



-- Definition of table `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE `carrinho` (
  `codcarrinho` int(11) NOT NULL,
  `codproduto` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `taxa_entrega` int(11) DEFAULT NULL,
  PRIMARY KEY (`codcarrinho`),
  KEY `codproduto` (`codproduto`),
  CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`codproduto`) REFERENCES `produtos` (`codproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrinho`
--

/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;


--
-- Definition of table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `codcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` int(1) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cpf` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `info` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`codcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--


--
-- Definition of table `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
CREATE TABLE `fornecedores` (
  `codfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` int(1) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cnpj` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `info` varchar(2000) DEFAULT NULL,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`codfornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fornecedores`
--




--
-- Definition of table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `codproduto` int(11) NOT NULL AUTO_INCREMENT,
  `codfornecedor` int(11) DEFAULT NULL,
  `pnome` varchar(100) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `descricao` varchar(20000) DEFAULT NULL,
  `foto` mediumblob,
  `estabelecimento` varchar(100) DEFAULT NULL,
  `pstatus` varchar(200) DEFAULT NULL,
  `informacoes` varchar(200) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codproduto`),
  KEY `codfornecedor` (`codfornecedor`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`codfornecedor`) REFERENCES `fornecedores` (`codfornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

--
-- Definition of table `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE `vendas` (
  `codvenda` int(11) NOT NULL AUTO_INCREMENT,
  `codcliente` int(11) DEFAULT NULL,
  `codfornecedor` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `pagamento` varchar(100) DEFAULT NULL,
  `entrega` varchar(100) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `informacoes` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`codvenda`),
  KEY `codfornecedor` (`codfornecedor`),
  KEY `codcliente` (`codcliente`),
  CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`codfornecedor`) REFERENCES `fornecedores` (`codfornecedor`),
  CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendas`
--




--
-- Definition of table `vendasitens`
--

DROP TABLE IF EXISTS `vendasitens`;
CREATE TABLE `vendasitens` (
  `codvendaitem` int(11) NOT NULL AUTO_INCREMENT,
  `codvenda` int(11) NOT NULL,
  `codproduto` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`codvendaitem`),
  KEY `codvenda` (`codvenda`),
  KEY `codproduto` (`codproduto`),
  CONSTRAINT `vendasitens_ibfk_1` FOREIGN KEY (`codvenda`) REFERENCES `vendas` (`codvenda`),
  CONSTRAINT `vendasitens_ibfk_2` FOREIGN KEY (`codproduto`) REFERENCES `produtos` (`codproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendasitens`
--

/*!40000 ALTER TABLE `vendasitens` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendasitens` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;