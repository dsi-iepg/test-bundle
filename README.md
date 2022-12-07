https://nouvelle-techno.fr/articles/symfony-5-on-va-creer-un-bundle-niveau-moyen-avance


add
config/bundlex.php
```Iepg\Bundle\TestBundle::class => ['all' => true],```

create => config/packages/iepg_test.yaml
Ici le 'iepg_test' vient de:
/DependencyInjection/Configuration/ =>  new TreeBuilder('iepg_test');
```
# Ici la base est l'alias du bundle !!
iepgdsi:
  my_var_string: "je suis heureux de faire un bundle"
  my_array:
    - element1
    - element2
  my_integer: 22
```

## premier Test
php bin/console config:dump-reference
-|-|-
TestBundle|iepgdsi|
|| 


create config/routes/tuto_tools.yaml
```
_tools:
  resource: '@TestBundle/Resources/config/routes.yaml'
  prefix: /my-route
```

