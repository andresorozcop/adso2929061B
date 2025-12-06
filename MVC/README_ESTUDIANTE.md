# Mi Proyecto Pokemon MVC

## Qué hice yo

Yo hice un sistema completo para manejar pokemones usando el patrón MVC (Model-View-Controller). Esto es como separar el código en partes para que sea más ordenado.

## Cómo funciona

### 1. Model (model.php)
- Aquí guardo todas las funciones para hablar con la base de datos
- `listPokemons()` - muestra todos los pokemones
- `addPokemon()` - agrega un pokemon nuevo
- `getPokemonById()` - busca un pokemon por su id
- `updatePokemon()` - actualiza los datos de un pokemon
- `deletePokemon()` - borra un pokemon
- `getTrainers()` - muestra la lista de entrenadores

### 2. Controller (controller.php)
- Aquí es donde decido qué hacer según lo que pide el usuario
- Uso un `switch` para ver la acción (`action`) en la URL
- Si es `add` muestro el formulario para agregar
- Si es `store` guardo el pokemon nuevo
- Si es `edit` muestro el formulario para editar
- Si es `update` guardo los cambios
- Si es `delete` borro el pokemon
- Si es `view` muestro los detalles

### 3. Views (carpeta views/)
- `welcome.php` - la página principal con la tabla de pokemones
- `add_pokemon.php` - formulario para agregar pokemon nuevo
- `edit_pokemon.php` - formulario para editar un pokemon
- `view_pokemon.php` - muestra los detalles de un pokemon

## Cómo probarlo

1. **Para agregar un pokemon:**
   - Hacen clic en el botón verde "Add Pokemon"
   - Llenan el formulario con los datos
   - Hacen clic en "Guardar Pokemon"
   - Los redirige a la lista principal

2. **Para ver los detalles:**
   - Hacen clic en la lupa (primer botón) en la tabla
   - Muestra todos los datos del pokemon con su entrenador
   - Pueden editar o eliminar desde ahí

3. **Para editar:**
   - Hacen clic en el lápiz (segundo botón)
   - Cambian los datos que quieran
   - Hacen clic en "Actualizar Pokemon"

4. **Para eliminar:**
   - Hacen clic en la basura (tercer botón)
   - Les pregunta si están seguros
   - Si dicen que sí, borra el pokemon

## Preguntas que podría hacer el profesor

**P: ¿Por qué usaste MVC?**
R: Porque es más ordenado. El Model se encarga de la base de datos, el Controller de la lógica y las Views de mostrar todo. Así si quiero cambiar algo, sé dónde buscar.

**P: ¿Cómo manejas las acciones?**
R: Uso el parámetro `action` en la URL. Por ejemplo `index.php?action=add` me dice que tengo que mostrar el formulario para agregar. En el Controller uso un switch para decidir qué función ejecutar.

**P: ¿Por qué usaste prepared statements?**
R: Para evitar inyección SQL. Mi profesor me enseñó que es peligroso poner variables directamente en las consultas SQL, así que uso `?` y `:nombre` para que sea más seguro.

**P: ¿Cómo funciona la conexión a la base de datos?**
R: Usé el patrón Singleton. La clase Database tiene una conexión estática, así que no se crea una conexión nueva cada vez, es más eficiente.

**P: ¿Por qué separaste las vistas en archivos diferentes?**
R: Porque cada vista tiene una función diferente. `add_pokemon.php` solo sirve para agregar, `edit_pokemon.php` solo para editar. Así el código es más fácil de leer y mantener.

**P: ¿Cómo validas los datos?**
R: En los formularios uso `required` en los campos obligatorios y `min="1" max="255"` en los números para que no pongan valores raros. También uso `htmlspecialchars()` para evitar XSS.

**P: ¿Qué pasa si alguien pone un ID que no existe?**
R: En el Controller verifico si el pokemon existe antes de mostrar la vista. Si no existe, los redirijo a la página principal.

## Errores que tuve y cómo los arreglé

1. **Error:** Los botones no funcionaban
   **Solución:** Tenía que poner las URLs correctas con `index.php?action=nombre&id=numero`

2. **Error:** No se guardaban los datos del formulario
   **Solución:** Me faltaba cambiar el `action` del formulario a `index.php?action=store`

3. **Error:** No se veían los datos del pokemon al editar
   **Solución:** Tenía que pasar los datos del pokemon a la vista en el Controller

## Qué podría mejorar

- Agregar más validaciones
- Poner animaciones bonitas
- Agregar búsqueda y filtros
- Hacer que se puedan subir imágenes de los pokemones

Pero para empezar, así funciona bien y es fácil de entender.
