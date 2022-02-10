## Key-Überprüfung

Kann verwendet werden, um die Gültigkeit eines Keys zu überprüfen.

### Anfrage

| Parameter | Beschreibung                         |
| --- |--------------------------------------|
| key | Benutzer-Key                         |
| version | `1`                                  |
| request | `valid`                              |
| characterId | Charakter-ID (4 Zeichen) |

### Beispiel

`https://api.hyperjo.de/?version=1&request=valid&key=978ba661-9ea9-430b-b2e1-38930d735fd9&characterId=425`

### Rückgabe

Für eine gültige Key/Charakter-ID Kombination:
```json
{
  "characterId": "D48F",
  "valid": true
}
```

Für eine ungültige Key/Charakter-ID Kombination:
```json
{
  "valid": false
}
```

### Changelog

- Seit Version 1 verfügbar.
