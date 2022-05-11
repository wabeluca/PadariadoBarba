CREATE TABLE tipo_produto(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome_tipo VARCHAR(30)
)

CREATE TABLE produto(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(30),
	perecivel INT,
	valor DECIMAL(10,2),
	tipo_produto INT,
	imagem VARCHAR(100)
);

ALTER TABLE produto
	ADD CONSTRAINT fk_produto_tipo
	FOREIGN KEY (tipo_produto)
	REFERENCES tipo_produto(id);

CREATE TABLE usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100),
	nome_tipo VARCHAR(30),
    senha VARCHAR(32),
    usuario VARCHAR(100),
    chave VARCHAR(10)
)