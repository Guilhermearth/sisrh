INSERT INTO sisrh.cargos (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Gerente de Tecnologia', NULL, NULL),
(2, 'Gerente Financeiro', NULL, NULL),
(3, 'Gerente de Comercial', NULL, NULL),
(4, 'Supervisor', NULL, NULL),
(5, 'Auxiliar de Limpeza', NULL, NULL),
(6, 'Auxiliar Administrativo', NULL, NULL),
(7, 'Técnico de Informátiva', NULL, NULL),
(8, 'Assistente comercial', NULL, NULL);

-- --------------------------------------------------------

INSERT INTO sisrh.departamentos (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Departamento de Tecnologia', NULL, NULL),
(2, 'Departamento Financeiro', NULL, NULL),
(3, 'Departamento Comercial', NULL, NULL),
(4, 'Zeladoria', NULL, NULL),
(5, 'Recursos Humanos', NULL, NULL);

-- --------------------------------------------------------

INSERT INTO sisrh.users (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '123456', NULL, NULL, NULL);

-- --------------------------------------------------------

INSERT INTO sisrh.funcionarios (`id`, `nome`, `data_nasc`, `sexo`, `email`, `telefone`, `cpf`, `foto`, `salario`, `id_departamento`, `id_cargo`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'João da Silva', '1985-03-05', 'm', 'joao.silva@gmail.com', '(75) 99999-9999', '99999999999', 'joao.silva.jpg', '8000.00', 1, 1, 1, NULL, NULL),
(2, 'Adriana Feitosa', '1989-06-05', 'f', 'adriana.feitosa@gmail.com', '(75) 88888-8888', '88888888888', 'adriana.feitosa.jpg', '9000.00', 2, 2, 1, NULL, NULL),
(3, 'Paulo Ribeiro', '1990-12-13', 'm', 'paulo.ribeiro@gmail.com', '(75) 77777-7777', '77777777777', 'paulo.ribeiro.jpg', '4000.00', 3, 4, 1, NULL, NULL),
(4, 'Jaqueline Cardoso', '1998-02-08', 'f', 'jaqueline.cardoso@gmail.com', '(75) 66666-6666', '66666666666', 'jaqueline.cardoso.jpg', '3000.00', 1, 7, 1, NULL, NULL);