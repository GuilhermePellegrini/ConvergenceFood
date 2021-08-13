import React from 'react';

const Input = ( { para, type, id, name, label } ) => {
    return (
            <>
                <label htmlFor="para">{label}</label>
                <input type="type" id="id" name="name" required></input>
            </>
        )
}

export default Input;
