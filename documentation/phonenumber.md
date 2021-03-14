## Geld

Mit dieser Funktion kann die Telefonnummer von einem Charakter abgefragt werden.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | Benutzer-Key mit Recht `phonenumber` benötigt. |
| version | `1` |
| request | `phonenumber` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=phonenumber&key=978ba661-9ea9-430b-b2e1-38930d735fd9`

### Rückgabe

```json
{
  "characterId": 2,
  "phoneNumber": 1337
}
```

### Changelog

- Seit Version 1 verfügbar.