import React from 'react';

const Input = ( { para, type, id, name, label } ) => {
    return (
            <div>
                <label htmlFor={para}>{label}</label>
                <input type={type} id={id} name={name} required></input>
            </div>
        )
}

export default Input;
