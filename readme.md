# About PHP Laravel Architecture

This repository is a Laravel project, based on an N-Layer architecture.

## Main Layers
The management of layers allows to keep the code clean as each has a single responsibility.

### Distributed Services
Located in **App\Http\Controllers\DistributedServices** 

Allows to handle the code referring to web services, in this way is kept isolated from the drivers used to render the views.

### Domain Layer

Located in **App\DomainLayer**

Allows you to handle all business logic.

### Persistence Layer

Located in **App\PersistenceLayer**

Allows to control the persistence of data, in the case of consuming a webservices, database, etc.


## IDesoft Entity [Generic Model class]

Generic model class that all domain classes can extend.

This class allows you to easily create an object from an array or a string / json.

1. Create your entity class and extend it from IDesoft Entity

```php

namespace App\DomainLayer\DomainEntities;

class UserEntity extends IDesoftEntity
{
    /**
     * Unique identifier of vehicle tracking resource.
     *
     * @param integer $id
     * 
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Identifier of the vehicle track. 128 characters max.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
```
2. Creates an object of type UserEntity (Created in part 1)
```php
$credentials = [
    'username' => 'someusername',
    'password' => 'somepassword'
];

$userEntity = new UserEntity($credentials);

echo $userEntity->getUsername();
echo $userEntity->getPassword();

// results
// someusername
// somepassword
```

## Changelog

### 1.0.0 (10 Aug 2017)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
