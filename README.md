# Design Patterns
### Refactoring des Design Patterns classiques et modernes

Apprendre les Design Patterns classiques ou modernes, de façon captivantes avec des conseils et des cas pratiques. 

## Installation

* Clonez ce repository :
```bash
git clone git@github.com:roukmoute/design-patterns.git
```

* Installez les dépendances :
```bash
composer install
```

## Documentation

### Exécuter les tests

Exécutez la suite de test à partir du répertoire racine avec la commande suivante:

```bash
php ./vendor/bin/phpunit
```

L'ensemble de la suite peut prendre du temps. Si vous voulez tester un Design Pattern en particulier, tapez le nom de la classe du test avec l'option filter, après la commande phpunit, par exemple :

```bash
php ./vendor/bin/phpunit --filter FactoryMethodTest
```
