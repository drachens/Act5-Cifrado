
## Explicación

- El modelo de la tabla ocupada está [/database/migrations/2021_11_18_220527_create_info2s_table.php](https://github.com/drachens/Act5-Cifrado/blob/main/database/migrations/2021_11_18_220527_create_info2s_table.php)
- Para simular una solicitud de tipo POST, la función **Posts** del archivo [/app/Http/Controllers/Info2Controller.php](https://github.com/drachens/Act5-Cifrado/blob/main/app/Http/Controllers/Info2Controller.php)
- Los datos generados en la solicitud POST son ingresados a la BDD por la función **create** del archivo [/app/Http/Controllers/Info2Controller.php](https://github.com/drachens/Act5-Cifrado/blob/main/app/Http/Controllers/Info2Controller.php)
- La vista en donde se desplega la tabla de datos está en la siguiente ruta: [/resources/views/posts/postVista.blade.php](https://github.com/drachens/Act5-Cifrado/blob/main/resources/views/posts/postVista.blade.php)

- La vista que genera el formulario POST y lo envía esta en la siguiente ruta: [/resources/views/posts/postCreate.blade.php](https://github.com/drachens/Act5-Cifrado/blob/main/resources/views/posts/postCreate.blade.php)

