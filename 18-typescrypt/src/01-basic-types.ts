// src/01-basic-types.ts

// Tus declaraciones de variables con tipos
let userId: number = 101;
let userName: string = "Alice";
let isActivated: boolean = true;

// Tus interfaces
interface MyData {
    id: number;
    value: string;
}

// Tus constantes con tipos y asignaciones
const myObject: MyData = { id: 1, value: "Test" };

// Tu lógica de programa, funciones, etc.
console.log(`User ID: ${userId}, Name: ${userName}`);

// Si quisieras exportar algo de este archivo para usarlo en otro:
// export const someValue = 42;
// export function sayHello(name: string) { console.log(`Hello ${name}`); }