CREATE TABLE dados (
  id_dados INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  empresa_id_empresa INTEGER UNSIGNED NOT NULL,
  origem_id_origem INTEGER UNSIGNED NOT NULL,
  destino_id_destino INTEGER UNSIGNED NOT NULL,
  data_ida DATE NULL,
  data_volta DATE NULL,
  duracao_voo INT NULL,
  preco_voo INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_dados),
  INDEX dados_FKIndex1(empresa_id_empresa),
  INDEX dados_FKIndex2(origem_id_origem),
  INDEX dados_FKIndex3(destino_id_destino)
);

CREATE TABLE destino (
  id_destino INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_destino VARCHAR(45) NULL,
  PRIMARY KEY(id_destino)
);

CREATE TABLE empresa (
  id_empresa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_empresa VARCHAR(45) NULL,
  PRIMARY KEY(id_empresa)
);

CREATE TABLE origem (
  id_origem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_origem VARCHAR(45) NULL,
  PRIMARY KEY(id_origem)
);


