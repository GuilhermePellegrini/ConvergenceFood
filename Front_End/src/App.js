import React from "react";
import Input from "./Input";

const entradas = [
  {
    for: "nome",
    type: "text",
    id: "nome",
    name: "nome",
    label: "Nome Completo",
  },
  {
    for: "cpf",
    type: "text",
    id: "cpf",
    name: "cpf",
    label: "CPF",
  },
  {
    for: "email",
    type: "email",
    id: "email",
    name: "email",
    label: "Email",
  },
  {
    for: "senha",
    type: "senha",
    id: "senha",
    name: "senha",
    label: "Senha",
  },
  {
    for: "enderecoNome",
    type: "text",
    id: "enderecoNome",
    name: "enderecoNome",
    label: "Nome do Endereço",
  },
  {
    for: "logradouro",
    type: "text",
    id: "logradouro",
    name: "logradouro",
    label: "Logradouro",
  },
  {
    for: "numeroEndereco",
    type: "number",
    id: "numeroEndereco",
    name: "numeroEndereco",
    label: "Numero",
  },
  {
    for: "bairro",
    type: "text",
    id: "bairro",
    name: "bairro",
    label: "Bairro",
  },
  {
    for: "complemento",
    type: "text",
    id: "complemento",
    name: "complemento",
    label: "Complemento",
  },
  {
    for: "nomeComercial",
    type: "text",
    id: "nomeComercial",
    name: "nomeComercial",
    label: "Nome Comercial",
  },
  {
    for: "nomeFantasia",
    type: "text",
    id: "nomeFantasia",
    name: "nomeFantasia",
    label: "Nome Fantasia",
  },
  {
    for: "cnpj",
    type: "text",
    id: "cnpj",
    name: "cnpj",
    label: "CNPJ",
  },
  {
    for: "website",
    type: "text",
    id: "website",
    name: "website",
    label: "Website",
  },
  {
    for: "telefone",
    type: "number",
    id: "telefone",
    name: "telefone",
    label: "Telefone",
  },
  {
    for: "celular",
    type: "number",
    id: "celular",
    name: "celular",
    label: "Celular",
  },
  {
    for: "emailLoja",
    type: "email",
    id: "emailLoja",
    name: "emailLoja",
    label: "Email Comercial",
  },
  {
    for: "representante",
    type: "text",
    id: "representante",
    name: "representante",
    label: "Representante Legal",
  },
  {
    for: "representanteEmail",
    type: "text",
    id: "representanteEmail",
    name: "representanteEmail",
    label: "Email Representante",
  },
];

const App = () => {
  return entradas.map((entrada) => (
    <Input
      type={entrada.type}
      htmlFor={entrada.for}
      id={entrada.id}
      name={entrada.name}
      label={entrada.label}
    />
  ));
};

export default App;
