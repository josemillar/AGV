SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `codigoUsuario` VARCHAR(45) NOT NULL,
  `nombreUsuario` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `codigoUsuario` VARCHAR(45) NOT NULL,
  `nombreUsuario` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`productoStock`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`productoStock` (
  `idproductoStock` INT NOT NULL,
  `stock` INT NOT NULL,
  PRIMARY KEY (`idproductoStock`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`producto` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `categoria` INT NOT NULL,
  PRIMARY KEY (`idproducto`),
  CONSTRAINT `stock`
    FOREIGN KEY (`idproducto`)
    REFERENCES `mydb`.`productoStock` (`idproductoStock`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pedido` (
  `nroPedido` INT NOT NULL AUTO_INCREMENT,
  `idproducto` VARCHAR(45) NULL,
  `descripcionProducto` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NULL,
  `cantidad` VARCHAR(45) NULL,
  `total` VARCHAR(45) NULL,
  PRIMARY KEY (`nroPedido`),
  CONSTRAINT `producto`
    FOREIGN KEY (`nroPedido`)
    REFERENCES `mydb`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`detallePedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`detallePedido` (
  `idCliente` INT NOT NULL,
  `fec_solicitud` VARCHAR(45) NOT NULL,
  `fec_entrega` VARCHAR(45) NOT NULL,
  `nroPedido` VARCHAR(45) NOT NULL,
  `detallePedidocol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCliente`),
  CONSTRAINT `pedido`
    FOREIGN KEY ()
    REFERENCES `mydb`.`pedido` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `fechaNacimiento` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`),
  CONSTRAINT `cliente`
    FOREIGN KEY (`idcliente`)
    REFERENCES `mydb`.`detallePedido` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`categoria` (
  `idcategoria` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  INDEX `categoria_idx` (`idcategoria` ASC),
  CONSTRAINT `categoria`
    FOREIGN KEY (`idcategoria`)
    REFERENCES `mydb`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`precios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`precios` (
  `idproducto` INT NOT NULL,
  `precio` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idproducto`),
  CONSTRAINT `precios`
    FOREIGN KEY (`idproducto`)
    REFERENCES `mydb`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`loginCliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`loginCliente` (
  `idcliente` INT NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`),
  CONSTRAINT `login`
    FOREIGN KEY (`idcliente`)
    REFERENCES `mydb`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;