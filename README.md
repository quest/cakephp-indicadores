[![Build Status](https://travis-ci.org/quest/cakephp-indicadores.svg?branch=dev)](https://travis-ci.org/quest/cakephp-indicadores)

# Plugin de Indicadores Económicos de Chile para CakePHP #

Con este Plugin puedes obtener información para enriquecer su sitio web o tienda virtual, agregándole indicadores económicos,
santoral o honomástico, valor de las divisas más importantes, indicadores de la bolsa y restricción automotriz.

La información es obtenida de [http://indicadoresdeldia.cl](http://indicadoresdeldia.cl/pages/code/).
**Indicadores del Día** provee diariamente información de indicadores económicos actualizados y de manera gratuita, proporcionando ésta
por medio de su sitio web y como webservice para desarrolladores.

## Requerimientos ##

* PHP version: PHP 5.2+
* CakePHP version: 2.x Stable

## Instalación ##

### Usando Composer ###

Agregar al archivo `composer.json` de tu proyecto lo siguiente, en caso de no tenerlo deberás crearlo:

```composer
{
    "require": {
        "quest/cakephp-indicadores": "master"
    }
}
```

### Manual ###

* Descargar: [http://github.com/quest/cakephp-indicadores/zipball/master](http://github.com/quest/cakephp-indicadores/zipball/master)
* Descomprime el archivo
* Copia el directorio a `app/Plugin`
* Renombra la carpeta que copiaste a `Indicadores`

### GIT Submodule ###

En el directorio de tu aplicación:

```bash
git submodule add -b master git://github.com/quest/cakephp-indicadores.git Plugin/Indicadores
git submodule init
git submodule update
```

### GIT Clone ###

En tu carpeta `Plugin`:

```bash
git clone -b master git://github.com/quest/cakephp-indicadores.git Indicadores
```

## Habilitar Plugin ##

Para habilitar el plugin escribe lo siguiente en tu archivo `app/Config/bootstrap.php`:

```php
CakePlugin::load('Indicadores');
```

O puedes habilitar todos tus Plugins:

```php
CakePlugin::loadAll();
```

## Uso ##

Lo puede ocupar en el Controlador como Componente y en la Vista como Helper, para esto debes activarlo en tu `app/Controller/AppController.php` usando `$helpers` o `$components`
```php
public $helpers = array('Indicadores.Indicadores');
public $components = array('Indicadores.Indicadores');
```

### Métodos ###

#### Indicadores::read(string $key) ####

Con este método puedes obtener el valor de los indicadores económicos disponibles:

En la vista:
```php
echo $this->Indicadores->read('moneda.dolar');
```

En el controlador:
```php
$this->Indicadores->read('moneda.dolar');
```

Si $key viene vacío, devuelve en un arreglo todos los valores disponibles.

Los valores que puede tener $key son:
* moneda.dolar
* moneda.euro
* indicador.uf
* indicador.ipc
* indicador.utm
* indicador.imacec
* santoral.ayer
* santoral.hoy
* santoral.maniana
* bolsa.igpa
* bolsa.ipsa
* bolsa.banca
* bolsa.utilities
* bolsa.commodities
* bolsa.consumo
* bolsa.retail

#### Indicadores::check(string $key) ####

Para validar si un indicador existe, está disponible el método `check()`, devuelve `true` si existe el indicador, en caso contrario retorna `false`.

En la vista:
```php
if ($this->Indicadores->check('moneda.dolar')) {
    //algo
}
```

En el controlador:
```php
if ($this->Indicadores->check('moneda.dolar')) {
    //algo
}
```

## TODO ##
* Cache
* Modelo

## Support ##

Para reportar un bug o solicitar una mejores, ingrea al [Issue Tracker](https://github.com/quest/cakephp-environment/issues).

## Contribuye con este Plugin ##

Sientete libre de contribuir con el plugin para mejorar con nuevos issues, peticiones de mejoras, test de unidad y arreglo de errores o nuevas mejoras.

Toda ayuda o mejora es bienvenida :)

## Licencia ##

Copyright 2014, [Victor San Martín](http://twitter.com/questchile)

Proyecto licenciado bajo [The MIT License](http://www.opensource.org/licenses/mit-license.php)

La redistribución de los archivos deben conservar el aviso de copyright anterior.
