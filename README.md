
<p align="center"><a href="https://damiangonzalezdev.blogspot.com/" target="_blank"><img src="https://cdn.pixabay.com/photo/2017/05/12/15/16/hexagon-2307350_960_720.png" width="100"></a></p>

## BACK-END (PHP)
 

    - Se deberá desarrollar una aplicación que permita registrar clientes en una base de datos, deberá cubrir los siguientes requerimientos:
        ◦ Alta del cliente
        ◦ Listado de clientes (con paginador)
        ◦ Editar datos de un cliente
        ◦ Eliminar cliente
    - La información del cliente que se debe guardar es:
        ◦ Nombre(s)*
        ◦ Apellidos*
        ◦ Correo electrónico*
        ◦ Teléfono*
        ◦ Número de tarjeta de crédito*

Toda la información es obligatoria (*)


Se deberá desarrollar el servicio que reciba los datos de los formularios y los almacene en una Base de Datos.

* El aspirante deberá definir la estructura de dicha Base de Datos.

* La Base de Datos deberá estar definida en MySQL.

* La aplicación deberá ser sumamente segura


## CONSIDERACIONES TÉCNICAS Y DE DISEÑO

* Es de la elección del aspirante el definir qué DOCTYPE utilizará para
la codificación HTML de la maqueta.

* Queda a elección del aspirante el definir cómo mostrar los mensajes de error correspondientes y cómo será el envío de información con los servicios de Back-End.

* El aspirante puede definir qué métricas de seguridad utilizar para el desarrollo de la aplicación.

* El aspirante puede utilizar algún framework de desarrollo en PHP

* El aspirante puede utilizar MVC o programación estructurada.

## Especificaciones tecnicas de solucion

- Backend: __Laravel__
- Frontend: __Bootstrap__,  __Blade__
- Base de datos: __Mysql__
- Control de versiones: __Github__
- Deploy server: __Heroku__

### Especificaciones de desarrollo

- Patron de diseño: __MVC__
- Metodo de autenticacion de usuario: __laravel/ui__
- Manejo de bases de datos: __Eloquent__

### Notas:
1.  Solo usuarios registrados pueden realizar operaciones en la aplicacion.
2.  La informacion de *credit_card* solo es requerida al crear un cliente y no es mostrada dicha informacion.
3.  La informacion es almacenada en una base de datos *Mysql*
4.  Es posible realizar modificaciones de campos de los clientes
5.  Es posible eliminar clientes de la base de datos
6.  Los datos son validados por medio de las clases Request de laravel, se crearon clases validadoras especiales para cada peticion.
7.  Se crea una API REST Full para las acciones con los clientes (CRUD)
8.  Se usa el middleware auth de laravel para validar el inicio de sesiones
9.  Se realiza una paginacion por cada 5 registros de clientes

- [db4Free.net](https://db4free.net)
- [Heroku](https://www.heroku.com/home)

__by__: *DamianDev*

