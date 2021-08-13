import React from 'react'
import Input from './Input'

const entradas = [
  {
    "for": "nome",
    "type": "text",
    "id": "nome",
    "name": "name",
    "label": "Nome Completo"        
  },
  {
    "for": "email",
    "type": "email",
    "id": "email",
    "name": "email",
    "label": "Email"        
  },
  {
    "for": "password",
    "type": "password",
    "id": "password",
    "name": "password",
    "label": "Senha"
  }
];


const App = () => {
  return (
    entradas.map((entrada) => (
      <Input type={entrada.type} para={entrada.for} id={entrada.id} name={entrada.name} label={entrada.label} />
    ))
  )
}

export default App;