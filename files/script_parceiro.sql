CREATE TABLE equipe (
  id_equipe INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NULL,
  lider VARCHAR(100) NULL,
  cor VARCHAR(100) NULL,
  PRIMARY KEY(id_equipe)
);

CREATE TABLE celula (
  id_celula INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  equipe_id_equipe INTEGER UNSIGNED NOT NULL,
  lider VARCHAR(100) NULL,
  dia VARCHAR(100) NULL,
  hora VARCHAR(100) NULL,
  PRIMARY KEY(id_celula),
  INDEX celula_FKIndex1(equipe_id_equipe)
);

CREATE TABLE arrecadacao (
  id_arrecadacao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  celula_id_celula INTEGER UNSIGNED NOT NULL,
  data_recebimento DATE NULL,
  valor INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_arrecadacao),
  INDEX arrecadacao_FKIndex1(celula_id_celula)
);


