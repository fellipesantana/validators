# Ufox/Validators

### Configuração
Para que o validator desejado seja disponibilizado ao projeto deve ser incluído no arquivo `App\Providers\AppServiceProvider` no método `boot` como demonstrado na linha abaixo com o validator para CEP:

```sh
Validator::extend ( "cep", "Ufox\Validators\Cep@validate" );
```

Onde `"cep"` deve ser substituído pelo nome que este validator será reconhecido e `Cep@validate` deve ser substituído pelo `validator_desejado@validate`