import React from "react";

const Input = ({ htmlFor, type, id, name, label }) => {
  return (
    <div>
      <label htmlFor={htmlFor}>{label}</label>
      <input type={type} id={id} name={name} required></input>
    </div>
  );
};

export default Input;
