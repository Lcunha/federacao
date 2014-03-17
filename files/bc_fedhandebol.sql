CREATE TABLE arbitro (
  id_arbitro INTEGER UNSIGNED AUTO_INCREMENT,
  nome VARCHAR,
  telefone INTEGER UNSIGNED NULL,
  cpf INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_arbitro)
);

CREATE TABLE jogador (
  id_jogador INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  time_id_time INTEGER UNSIGNED NOT NULL,
  nome VARCHAR NULL,
  data_nascimento DATE NULL,
  cpf INTEGER UNSIGNED NULL,
  numero INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_jogador),
  INDEX jogador_FKIndex1(time_id_time)
);

CREATE TABLE jogo (
  id_jogo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  espectadores INTEGER UNSIGNED NULL,
  cidade VARCHAR(100) NULL,
  localizacao VARCHAR(200) NULL,
  data_jogo DATETIME NULL,
  duracao DOUBLE NULL,
  total_7metros INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_jogo)
);

CREATE TABLE tecnico (
  id_tecnico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR NULL,
  endereco VARCHAR NULL,
  telefone INTEGER UNSIGNED NULL,
  cpf INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_tecnico)
);

CREATE TABLE tempo (
  id_tempo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  jogo_id_jogo INTEGER UNSIGNED NOT NULL,
  tipo INTEGER UNSIGNED NULL,
  advertencia INTEGER UNSIGNED NULL,
  punicao INTEGER UNSIGNED NULL,
  desqualificacao INTEGER UNSIGNED NULL,
  relatorio INTEGER UNSIGNED NULL,
  tiro_7metros INTEGER UNSIGNED NULL,
  tempo_tecnico INTEGER UNSIGNED NULL,
  placar_time1 INTEGER UNSIGNED NULL,
  placar_time2 INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_tempo),
  INDEX tempo_FKIndex1(jogo_id_jogo)
);

CREATE TABLE time (
  id_time INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tecnico_id_tecnico INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(200) NULL,
  categoria VARCHAR(100) NULL,
  endereco VARCHAR(200) NULL,
  data_fundacao DATE NULL,
  presidente VARCHAR(100) NULL,
  telefone VARCHAR(16) NULL,
  PRIMARY KEY(id_time),
  INDEX time_FKIndex1(tecnico_id_tecnico)
);

CREATE TABLE time_jogo (
  time_id_time INTEGER UNSIGNED NOT NULL,
  tempo_id_tempo INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(time_id_time, tempo_id_tempo),
  INDEX time_has_tempo_FKIndex1(time_id_time),
  INDEX time_has_tempo_FKIndex2(tempo_id_tempo)
);


